<x-login-layout>

<h2>検索</h2>
        <form action="/search" method="post">
            @csrf
            <input type="text" name="keyword" class="form" placeholder="ユーザー検索">
            <button type="submit" class="btn btn-success"><img src="images/search.png" alt="検索ボタン"></button>
        </form>


</x-login-layout>
