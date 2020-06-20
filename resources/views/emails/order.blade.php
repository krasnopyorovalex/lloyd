<p>Имя: {{ $data['name'] }}</p>
<p>Телефон: {{ $data['phone'] }}</p>
<p>Email: {{ $data['email'] }}</p>
@if($data['info'])
<p>Комментарий: {{ $data['info'] }}</p>
@endif
