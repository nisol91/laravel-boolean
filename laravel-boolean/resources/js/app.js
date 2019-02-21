
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
var $ = require('jquery');
require('./bootstrap');


//--

function PrintData(data) {
    var arr = data['studenti']

    for (i = 0; i < arr.length; i++) {
        var copia = $('.templates .single_student').clone();

        $('.students_cont').append(copia);

    }
    $('.students_cont .single_student').each(function (index) {
        // element == this

        $(this).find('h1').text(arr[index]['nome']);
        $(this).find('h3').text(arr[index]['eta']);
        $(this).find('h2').text(arr[index]['azienda']);
        $(this).find('img').attr('src', arr[index]['link']);
        $(this).find('a').attr('href', 'http://127.0.0.1:8000/dopo-il-corso/student-show/' + arr[index]['slug']);


    });
  }
//--



$(document).ready(function () {
//questo trucco mi serve per poter usare il js solo per una determinata pagina.
// se no dovrei fare un file js per ogni pagina.
    if ($('#gender').length > 0) {

        $('#filtra').click(function () {
            $('.students_cont').children().remove();
            var valoreGenere = $('#my-input').val();
            console.log(valoreGenere);

            $.ajax({
                //student/filter deve essere nella cartella api ma posso chiamarlo ad hoc come voglio
                url: "http://127.0.0.1:8000/api/student/filter",
                method: "GET",
                data: {
                    gender: valoreGenere,
                },
                success: function (data) {
                    console.log(data);

                    PrintData(data);
                },
                error: function () {
                    return 'errore';
                }
            });

        });
    }
});



