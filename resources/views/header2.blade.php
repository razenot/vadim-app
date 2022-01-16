<div class="header">
    <p>Тут шапка 2</p>
    <p><button>Добавить значение в Cookie</button></p>
</div>


<script>
    $('button').click(function(){
        $.ajax({
            type: 'POST',
            url: '/addsigning',
            data: {
                signing: 'Y',
                _token: '{{ csrf_token() }}'
            }
        });
    });
</script>

<style>
    .header{
        color: white;
        background: red;
        width: 100%;
        padding: 100px 25px;
    }
</style>