<div class="header">
    <p>Тут шапка 1</p>
    <p><button id="del">Удалить значение из Cookie</button></p>
</div>

<script>
    $('button').click(function(){
        $.ajax({
            type: 'POST',
            url: '/delsigning',
            data: {
                signing: 'N',
                _token: '{{ csrf_token() }}'
            }
        });
    });
</script>

<style>
    .header{
        color: white;
        background: green;
        width: 100%;
        padding: 100px 25px;
    }
</style>