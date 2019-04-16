var $module = {
    current_page: 1,
    last_page: 1,
    ajax_url: null,
    add_success_url: null,
    initialize: function(ajax_url){
        $module.ajax_url = ajax_url;

        $("#records-container").on("click", ".delete", function(){
            let listItem = $(this).closest(".article-list-item");
            let id = listItem.data("id");
            $module.delete(id);
        });
        $("#btn-add").click(function(e){
            $module.add();
        });
    },
    delete: function(id){
        swal({
            title: "Seguro que deseas eliminar este registro?",
            text: "El registro se borrará de forma permanente!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            cancelButtonText: "No",
            showLoaderOnConfirm: true,
            closeOnConfirm: false
        }, function () {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN":$("meta[name='csrf-token']").attr("content")
                }
            });
            $.ajax({
                url: $module.ajax_url+"/"+id,
                type: 'DELETE',
                dataType: 'json',
                success: function(data)
                {
                    var error = data.Error;
                    if(error==""){
                        swal("Registro borrado!", "El producto ha sido borrado.", "success");
                        news.load_records();
                    }
                    else{
                        swal("Error al borrar!", error, "error");
                    }
                }
            });
        });
    },
    add: function($callback=null){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: $module.ajax_url+"/add",
            type: "POST",
            data: {
                _token: CSRF_TOKEN,
                title: $("#title").val(),
                short_desc: $("#short-desc").val()
            },
            success: function(response){
                window.location.replace("/panel/news");
            }
        });
    },
    load_records: function(){
        $("#records-container").empty();

        $.ajax({
            url: $module.ajax_url+'/list?page='+$module.current_page,
            type: 'GET',
            dataType: 'json',
            success: function(result){
                var registers = result.data;
                $module.current_page = result.current_page;
                $module.last_page = result.last_page;

                if(registers.length>0){
                    for (let i = 0; i < registers.length; i++) {
                        $("#records-container").append('<div class="article-list-item" data-id="'+registers[i].id+'">'+
                            '<div class="row py-2 px-2">'+
                                '<div class="col-md-2">'+
                                    '<img class="image" src="'+registers[i].image+'" />'+
                                '</div>'+
                                '<div class="col-md-10">'+
                                    '<h2 class="title">'+registers[i].title+'</h2>'+
                                    '<div>'+
                                        registers[i].short_desc+
                                    '</div>'+
                                '</div>'+
                                '<div class="col-md-12 text-right">'+
                                    '<button class="btn btn-danger delete">'+
                                        '<svg viewBox="0 0 24 24">'+
                                            '<path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />'+
                                        '</svg>'+
                                    '</button>'+
                                '</div>'+
                            '</div>'+
                        '</div>');
                    }
                } else {
                    $("#records-container").append("<div class='py-3 px-3 centered'>No se encontraron registros</div>")
                }

                if($module.current_page<$module.last_page){
                    $("#btn-pager-next").prop("disabled", false);
                    $("#btn-pager-last").prop("disabled", false);
                } else {
                    $("#btn-pager-next").prop("disabled", true);
                    $("#btn-pager-last").prop("disabled", true);
                }
                
                if($module.current_page>1){
                    $("#btn-pager-previous").prop("disabled", false);
                    $("#btn-pager-first").prop("disabled", false);
                } else {
                    $("#btn-pager-previous").prop("disabled", true);
                    $("#btn-pager-first").prop("disabled", true);
                }
            }
        });
    }
}