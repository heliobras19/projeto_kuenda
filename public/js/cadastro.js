function anexar_titulo(campo)
    {
         Swal.fire({
            title: 'Aguarde!<br>Carregando formulÃ¡rio!',
            html: '',
            timerProgressBar: true,
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
            },
        });
        var cod_insc= $(campo).attr( 'data-insc' );
        var cod_concurso= $(campo).attr( 'data-conc' );
        var cod_titulo= $(campo).attr( 'data-cod_titulo' );
        
        
        $.post(Site_atual+"titulo/anexa_titulo",
            {cod_inscricao:cod_insc,cod_concurso:cod_concurso,cod_titulo:cod_titulo}).done(
                    function(valor)
                {
                    $("#div_cadastro").html(valor);
                    $('#Modal').modal('show');
                    Swal.close();
                }).fail( function(xhr, textStatus, errorThrown) {
                     Swal.close();
        alert(xhr.responseText);
    });
  
    
    };       
function cadastra_cliente(cod_entidade,cod_cliente)
{
    $('#div_cadastros').html('');
        $.post(Site_atual+'cliente/cadastra',
        {
            'cod_entidade':cod_entidade,
            'cod_cliente':cod_cliente
            
        },
            function(data)
            { 
                $("#div_cadastros").html(data);
                $('#Modal').modal('show');
            }
            , "html");
        
}

function lista_cliente(cod_entidade,cod_cobranca,opcao)
{
    $('#div_cadastros').html('');
        $.post(Site_atual+'cliente/lista_cadastro',
        {
            'cod_entidade':cod_entidade,
            'cod_cobranca':cod_cobranca,
            'opcao':opcao
            
        },
            function(data)
            { 
                $("#div_cadastros").html(data);
                $('#Modal').modal('show');
            }
            , "html");
        
}

$(function() {

    $('input[type=file]').change(function(e){
                $in=$(this);
                arquivo=$in.val();
                extensoes_permitidas = new Array('.odt','.pdf','.jpg','.jpeg','.doc','.docx','.xls','.xlsx','.rar','.zip','.png','.bmp');
                meuerro = "";
                if (!arquivo) 
                    {
                //Se nao tenho arquivo, e porque nao se selecionou um arquivo no formulario.
                    meuerro = "Nao foi selecionado nenhum arquivo";
                    }
                else
                    {
                        extensao = (arquivo.substring(arquivo.lastIndexOf("."))).toLowerCase();
                        permitida = false;
                        for (var i = 0; i < extensoes_permitidas.length; i++) 
                            {
                                if (extensoes_permitidas[i] == extensao) 
                                    {
                                        permitida = true;
                                        break;
                                    }
                            }
                        if (!permitida) 
                            {
                                meuerro = "Anexo invalido. \nSomente e aceito arquivos com extensoes: " + extensoes_permitidas.join(); 
                                Swal.fire({
                                        title: meuerro,
                                         icon: 'error',
                                    });
                                $in.val('');
                                return false;
                            }
                            if($in.size>5000)
                            {
                                Swal.fire({
                                        title: 'O Arquivo pode contar no mÃ¡ximo 5MB',
                                         icon: 'error',
                                    });
                                $in.val('');
                                return false;
                                
                            }

                    }
                    return true;
            })
                
 
 $(".download_anexo_documento").click(function () 
    {
        var inscricao=$(this).attr('data-insc');
        var protocolo=$(this).attr('data-anexo');
        var recurso=$(this).attr('data-data_arquivo');
        var now = new Date();
        window.open(Site_atual+"inscricao/download_anexo/"+inscricao+'/'+protocolo+'/'+recurso+'/'+btoa(now.getTime()), '_blank');

    })
$(".download_anexo_recurso").click(function () 
    {
        var inscricao=$(this).attr('data-insc');
        var protocolo=$(this).attr('data-protocolo');
        var recurso=$(this).attr('data-recurso');
        var now = new Date();
        window.open(Site_atual+"recurso/download_anexo/"+inscricao+'/'+protocolo+'/'+recurso+'/'+btoa(now.getTime()), '_blank');

})
 
    $('.btn_baixa_titulo').click(function()
        {
            var cod_concurso=$(this).attr('data-conc');
            var cod_inscricao=$(this).attr('data-insc');
            var cod_titulo=$(this).attr('data-titulo');
            var now = new Date();
            
            window.open(Site_atual+'titulo/download_anexo/'+cod_concurso+'/'+cod_inscricao+'/'+cod_titulo+'/'+btoa(now.getTime()),'_blank');
        })
    
    
   
})