<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/confirm.css">
  <link rel="stylesheet" href="../css/reset.css">
  <title>内容確認</title>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>
  <div class="contact">
    <div class="contact-ttl">
      <h1>内容確認</h1>
    </div>
    <div class="confirm-table">
      <form action="fix" method="post">
        @csrf
        <table>
          <tr>
            <th class="table-th">
              お名前
            </th>
            <td class="name-desc">
              <div class="last-name">
                {{$inputs['last-name']}}
                <input type="text" name="last-name" value="{{ $inputs['last-name'] }}" class="confirm">
              </div>
              <div class="first-name">
                {{$inputs['first-name']}}
                <input type="text" name="first-name" value="{{ $inputs['first-name'] }}" class="confirm">
              </div>
            </td>
          </tr>
          <tr>
            <th class="table-th">
              性別
            </th>

            <td class="radio">
              {{$gender}}
              <input type="radio" name="gender" class="radio-input" id="radio-01" value="{{ $inputs['gender'] }}" checked="checked">
            </td>

          </tr>
          <tr>
            <th class="table-th">
              メールアドレス
            </th>
            <td class="email">
              {{$inputs['email']}}
              <input type="email" name="email" value="{{ $inputs['email'] }}" class="confirm">
            </td>
          </tr>
          <tr>
            <th class="table-th">
              郵便番号
            </th>
            <td class="postcode">
              {{$inputs['postcode']}}
              <input type="text" name="postcode" pattern="\d{3}-\d{4}" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ $inputs['postcode'] }}" class="confirm">
            </td>
          </tr>
          <th class="table-th">
            住所
          </th>
          <td class="address">
            {{$inputs['address']}}
            <input type="text" name="address" id="" value="{{ $inputs['address'] }}" class="confirm">
          </td>
          <tr>
            <th class="table-th">
              建物名
            </th>
            <td class="building">
              {{$inputs['building_name']}}
              <input type="text" name="building_name" value="{{ $inputs['building_name'] }}" class="confirm">
            </td>
          </tr>
          <tr>
            <th valign="top" class="table-th">
              ご意見
            </th>
            <td class="opinion-confirm">
              {{$inputs['opinion']}}
              <input type="text" name="opinion" value="{{ $inputs['opinion'] }}" class="confirm">
            </td>
          </tr>
        </table>
        <div class="btns">
          <button type="submit" name="action" value="submit" 　class="confirm-btn">送信</button>
          <button type="submit" name="action" value="back" class="fix">修正する</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>