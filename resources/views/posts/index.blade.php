<x-login-layout>


  <h2>投稿画面</h2>
  <form action="/post" method="post">
            @csrf
            <input type="text" name="word" class="form" placeholder="投稿内容を入力してください">
            <!-- nameはバックエンドのクラス名 -->
            <button type="submit" class="btn btn-success"><img src="images/post.png" alt="投稿ボタン"></button>
        </form>


</x-login-layout>
