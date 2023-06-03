ユーザー
<form action="{{ route('user.logout') }}" method="post">
@csrf
<button>ログアウト</button>
</form>