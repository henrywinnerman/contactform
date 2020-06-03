<form action = "{{ url ('contact-us') }}" method = "post">

@csrf

<div class = "form-group">
<label>Name</label>
<input type = "text" name = "name" class = "form-control">
</div>

<br>


<div class = "form-group">
<label>Email</label>
<input type = "text" name = "email" class = "form-control">
</div>

<br>

<div class = "form-group">
<label>Message</label>
<textarea name = "message_body" class = "form-control"></textarea>
</div>

<br>

<button type = "submit" class = "btn btn-primary">Submit</button>

</form>