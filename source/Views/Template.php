<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='<?= BASE_URL ?>/source/Views/assets/css/jquery-ui.min.css' rel='stylesheet' type='text/css'>
    <title>Cadastro de Cliente</title>
</head>

<body>


<?php $this->loadViewInTemplate($view, $viewData); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
        crossorigin="anonymous"></script>
<script type="text/javascript">var BASE_URL = '<?= BASE_URL ?>';</script>
<script type="text/javascript">
    $('input[name=address_zipcode]').on('blur', function () {
        var cep = $(this).val();

        $.ajax({
            url: 'http://api.postmon.com.br/v1/cep/' + cep,
            type: 'GET',
            dataType: 'json',
            success: function (json) {
                console.log(json);

                $('input[name=address]').val(json.logradouro);
                $('input[name=address_neighb]').val(json.bairro);
                $('input[name=address_city]').val(json.cidade);
                $('input[name=address_state]').val(json.estado_info['nome']);


            }
        });
    });
</script>

<!--<script type="text/javascript">-->
<!---->
<!--    $(function () {-->
<!---->
<!--        $('#states_name').on('keyup', function () {-->
<!--            var datatype = $(this).attr('datatype');-->
<!--            var states_name = $(this).val();-->
<!--            if (datatype != '') {-->
<!--                $.ajax({-->
<!--                    url: BASE_URL + "/city/" + datatype,-->
<!--                    type: 'get',-->
<!--                    data: {states_name: states_name},-->
<!--                    dataType: 'json',-->
<!---->
<!--                    success: function (json) {-->
<!--                        if ($('.searchresults').length == 0) {-->
<!--                            $('#states_name').after('<div class="searchresults"></div>');-->
<!--                        }-->
<!---->
<!--                        $('.searchresults').css('left', $('#states_name').offset().left + 'px');-->
<!---->
<!--                        $('.searchresults').css('top'), $('#states_name').offset().top +-->
<!--                        $('#states_name').height() + 'px';-->
<!---->
<!--                        var html = '';-->
<!---->
<!--                        for (var item in json) {-->
<!--                            html += '<div class="si"><a href="'-->
<!--                                + json[item].link + '">'-->
<!--                                + json[item].states_name +-->
<!--                                '</a></div>';-->
<!--                            console.log(html);-->
<!--                        }-->
<!--                    }-->
<!--                });-->
<!--            }-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->

<script type="text/javascript">
    $(function () {
        $('#states_name').autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: BASE_URL + "/city/search_states",
                    type: 'post',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function (data) {
                        response($.map(data, function (item) {
                            var object = new Object();
                            object.label = item.states_name;
                            object.value = item.states_name;
                            object.id = item.states_id;
                            return object
                        }));
                    }
                });
            },
            select: function (event, ui) {
                 $('#states_name').val(ui.item.label);
                 $('#states_id').val(ui.item.value);
                return false;

            }
        });
    });
    function split( val ) {
        return val.split( /,\s*/ );
    }
    function extractLast( term ) {
        return split( term ).pop();
    }
</script>
</body>

</html>