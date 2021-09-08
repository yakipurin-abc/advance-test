<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/reset.css">
  <title>お問い合わせ</title>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>
  <div class="contact">
    <div class="contact-ttl">
      <h1>お問い合わせ</h1>
    </div>
    <div class="index-table">

      <form action="confirm" method="post">
        @csrf
        <table>
          <tr>
            <th class="table-th">
              お名前<span class="require">※</span>
            </th>
            <td class="name-desc">
              <div class="last-name">
                <input type="text" name="last-name" value="{{ $inputs['last-name'] }}">
                @error('last-name') <p class="error">{{ $message }}</p> @enderror
              </div>
              <div class="first-name">
                <input type="text" name="first-name" value="{{ $inputs['first-name'] }}">
                @error('first-name') <p class="error">{{ $message }}</p> @enderror
              </div>
            </td>
          </tr>
          <tr>
            <th></th>
            <td class="example-name">
              <p class="example-last">例）山田</p>
              <p class="example-first">例）太郎</p>
            </td>

          </tr>
          <tr class="gender-tr">
            <th class="gender-th">
              性別<span class="require">※</span>
            </th>

            <td class="radio">
              <input type="radio" name="gender" class="radio-input" id="radio-01" value="1">
              <label for="radio-01" class="gender" {{ $inputs['gender'] != '2' ? 'checked' : '' }}>男性</label>
              <input type="radio" name="gender" class="radio-input" id="radio-02" value="2" {{ $inputs['gender'] == '2' ? 'checked' : '' }}>
              <label for="radio-02" class="gender">女性</label>
            </td>

          </tr>
          <tr>
            <th class="table-th">
              メールアドレス<span class="require">※</span>
            </th>
            <td class="email">
              <input type="email" name="email" value="{{ $inputs['email'] }}">
              @error('email') <p class="error">{{ $message }}</p> @enderror
            </td>
          </tr>
          <tr>
            <th></th>
            <td>
              <p class="example-email">例）test@example.com</p>
            </td>
          </tr>
          <tr>
            <th class="table-th">
              郵便番号<span class="require">※</span>
            </th>
            <td class="postcode">
              <span>〒</span><input type="text" name="postcode" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');" value="{{ $inputs['postcode'] }}">
              @error('postcode') <p class="error">{{ $message }}</p> @enderror
            </td>
          </tr>
          <tr>
            <th></th>
            <td>
              <p class="example-postcode">例）123-4567</p>
            </td>
          </tr>
          <tr>
            <th class="table-th">
              住所<span class="require">※</span>
            </th>
            <td class="address">
              <input type="text" name="address" value="{{ $inputs['address'] }}">
              @error('address') <p class="error">{{ $message }}</p> @enderror
            </td>
          </tr>
          <tr>
            <th></th>
            <td class="example-address">
              <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </td>
          </tr>
          <tr>
            <th class="table-th">
              建物名
            </th>
            <td class="building">
              <input type="text" name="building_name" value="{{ $inputs['building_name'] }}">
            </td>
          </tr>
          <tr>
            <th></th>
            <td class="example-building">
              <p>例）千駄ヶ谷マンション101</p>
            </td>
          </tr>
          <tr>
            <th valign="top" class="opinion-th">
              <p>ご意見<span class="require">※</span></p>
            </th>
            <td class="opinion-td">
              <textarea name="opinion" id="" cols="30" rows="10" class="opinion">{{ $inputs['opinion'] }}"</textarea>
              @error('opinion') <p class="error">{{ $message }}</p> @enderror
            </td>
          </tr>
        </table>
        <button type="submit" class="confirm-btn">確認</button>
      </form>
    </div>
  </div>
</body>