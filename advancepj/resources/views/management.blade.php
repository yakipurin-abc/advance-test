<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/management.css">
  <link rel="stylesheet" href="../css/reset.css">
  <title>管理システム</title>
</head>

<body>
  
  <h2 class="management-ttl">管理システム</h2>
  <div class="search">
    <form action="{{ route('management.search') }}" method="get">
      <table>
        <tr>
          <th class="table-th">お名前</th>
          <td>
            <input type="text" name="fullname" >
          </td>
          <th class="table-th">性別</th>
          <td class="radio">
            <input type="radio" name="gender" class="radio-input" id="radio-00" value="0" checked>
            <label for="radio-00" class="gender">全て</label>
            <input type="radio" name="gender" class="radio-input" id="radio-01" value="1">
            <label for="radio-01" class="gender">男性</label>
            <input type="radio" name="gender" class="radio-input" id="radio-02" value="2">
            <label for="radio-02" class="gender">女性</label>
          </td>
        </tr>
        <tr>
          <th class="table-th">
            登録日
          </th>
          <td>
            <input type="date" class="date-1" name="date-1">
          </td>
          <td>
            ~
          </td>
          <td>
            <input type="date" class="date-2" name="date-2">
          </td>
        </tr>
        <tr>
          <th class="table-th">メールアドレス</th>
          <td>
            <input type="email" name="email">
          </td>
        </tr>
      </table>
      <div class="btns">
        <button type="submit" name="action" value="search" 　class="search-btn">検索</button>
        <button type="reset" name="action" value="reset" class="reset">リセット</button>
      </div>
    </form>
  </div>
  <div class="contents">
    {{ $contacts->appends(request()->input())->links('vendor.pagination.tailwind') }}
    <table class="results-table">
      <tr>
        <th class="results-th">ID</th>
        <th class="results-th">お名前</th>
        <th class="results-th">性別</th>
        <th class="results-th">メールアドレス</th>
        <th class="results-th">ご意見</th>
        <th class="results-th"></th>
      </tr>
      @foreach($contacts as $contact)
      <tr>
        <td class="results-td">{{ $contact->id }}</td>
        <td class="results-td">{{ $contact->fullname }}</td>
        <td class="results-td">
          @if($contact->gender == 1)
          <p>男性</p>
          @else
          <p>女性</p>
          @endif
        </td>
        <td class="results-td">{{ $contact->email }}</td>
        <td class="results-td">
          <div class="short">
            {{ $contact->opinion }}
          </div>
        </td>
        <td>
          <form action="{{ route('management.delete', ['id' => $contact->id]) }}" method="post">
            @csrf
            <button>削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</body>

</html>