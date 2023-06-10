<?php

namespace App\Services;

use App\Consts\AppConsts;
use League\Csv\Writer;

class CsvService
{
    public function exportCsv($kind, $head, $data, $fileName)
    {
        try {
            // CSVの生成    
            $csv = Writer::createFromFileObject(new \SplTempFileObject());
            $csv->insertOne($head); // ヘッダー行
            // データの挿入
            $formattedData = [];
            foreach ($data as $row) {
                switch ($kind) {
                    case 'shop':
                        $formattedRow = $this->ShopFormatRow($row);
                        break;
                }
                $formattedData[] = $formattedRow;
            }
            $csv->insertAll($formattedData);
            // レスポンスの作成
            $response = new \Symfony\Component\HttpFoundation\StreamedResponse(function () use ($csv) {
                $output = fopen('php://output', 'w');
                // 文字エンコーディングをUTF-8に設定
                fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));
                fputs($output, $csv->toString());
                fclose($output);
            });
            // レスポンスヘッダーの設定
            $response->headers->set('Content-Type', 'text/csv');
            $response->headers->set('Content-Disposition', "attachment; filename=$fileName");
            // ダウンロードを実行
            $response->send();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function ShopFormatRow($row)
    {
        return [
            $row['id'],
            $row['code'],
            $row['name'],
            $row['zip'],
            $row['prefectures'],
            $row['city'],
            "'" . $row['address'], // 日付に変換されるのを防止するためシングルクォーテーションを先頭に付ける
            $row['building'],
            $row['email'],
            $row['tel'],
            $row['status'] === AppConsts::STATUS_VALID ? "有効" : "無効",
            $row['created_at'],
            $row['updated_at'],
        ];
    }
}
