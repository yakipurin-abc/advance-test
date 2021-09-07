<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/reset.css">
  <title>お問い合わせ</title>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  @livewireStyles
</head>
<body>
  <div class="contact">
    <div class="contact-ttl">
      <h1>お問い合わせ</h1>
    </div>
    <div class="index-table">
      {{$slot}}
    </div>
  </div>
  @livewireScripts
</body>