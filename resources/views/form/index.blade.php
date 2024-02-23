<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-form-app</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <!-- Css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    function validateFile() {
	$("#file_error").html("");
	$("#file").css("border-color","#F0F0F0");
	var file_size = $('#file')[0].files[0];
	if(file_size.size>5242880) {
		$("#file_error").html("Przekroczony rozmiar pliku! Maksymalny dozwolony rozmiar pliku: 5MB");
		$("#file").css("border-color","#FF0000");
		return false;
	}
	return true;

    $.ajax({
          type:'POST',
          url:'/getmsg',
          data:'_token = <?php echo csrf_token() ?>',
          success:function(data) {
             $("#msg").html(data.msg);
          }
       });

}
</script>
<!-- Styles -->
<style>
</style>
</head>
    <body>
        <div class="container">
            <main>
                    <h1>Hello, ajax-form-app!</h1>
                    <div id = 'msg'>This message will be replaced using Ajax.
                        Click the button to replace the message.</div>
                    <form   id="contactForm" >
                        <div class="mb-3">
                            <label for="name" class="form-label">Imie i nazwisko</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="telephone" class="form-label">Numer telefonu</label>
                            <input  name="telephone" class="form-control" id="telephone">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adres email</label>
                            <input type="email" class="form-control is-invalid" name="email" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Treść wiadomości</label>
                            <textarea class="form-control is-invalid" id="textarea" name="content" placeholder="Wpisz.." maxlength="100"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">Załącznik</label>
                            <input class="form-control form-control-sm" id="file" name="file" type="file" accept="image/jpeg,application/pdf">
                            <span id="file_error"></span>
                        </div>
                        <button type="submit" class="btn btn-primary" onClick="validateFile();">Wyślij</button>
                    </form>
            </main>
        </div>
<script src="{{ asset('js/contact-form.js') }}"></script>
    </body>
</html>
