jQuery(document).ready(function($) {
    $("#createForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "addData.php",
            data: $(this).serialize(),
            success: function() {
                loadData()
                alert("Запись создана!");
            },
            error: function(){
                alert("Ошибка создания записи!");
            }
         });
    });

    function loadData(){
        $.ajax({
            type: "GET",
            url: "load.php",
            success: function(data) {
                var loadData = JSON.parse(data).data;
                $.each(loadData, function(idx, el) {
                    $('.table').append(`<tr>
                            <td>${el.name}</td>
                            <td>${el.message}</td>
                            <td>${el.date}</td>
                        </tr>`)
                  });
            },
            error: function(){
                alert("Ошибка загрузки");
            }
         });
    }

    loadData()
})