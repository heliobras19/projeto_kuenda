$(document).ready(function() 
    {

        $('body').on('keydown', 'input, select', function(e) {
    if (e.key === "Enter") {
        var self = $(this), form = self.parents('form:eq(0)'), focusable, next;
        focusable = form.find('input,a,select,button,textarea').filter(':visible');
        next = focusable.eq(focusable.index(this)+1);
        if (next.length) {
            next.focus();
        } else {
            form.submit();
        }
        return false;
    }
});
//        $('input select').bind("keypress", function(e) 
//            {
//                if ((e.keyCode == 10)||(e.keyCode == 13)) 
//                    {
//                        alert('enter');
//                        var generico = $("form").find('input,select:visible');
//                        var indice = generico.index(e.target) + 1;
//                        var seletor = $(generico[indice]).focus();
//                        
//                           e.keyCode = 9;
//                    }
//            });      
    $('.login_click').on('click',function(){
    
                                    $('#Modal').modal('show');
    });
    
    $('.valida_cpf_cpnj').on('blur',function()
        {
            var id = apenasNumeros($(this).val());
            if(id!='')
                {
                    if ($(".valida_cpf_cpnj").hasClass("cpf")) 
                        {
                            if(!TestaCPF(id))
                                {
                                    Swal.fire({
                                        title: 'CPF InvÃ¡lido!',
                                        icon: 'error',
                                        confirmButtonText: "OK",  
                                        showConfirmButton: true});
                                    $(this).val('');
                                }
                        }
                    else         
                        if ($(".valida_cpf_cpnj").hasClass("cnpj")) 
                            {
                                if(!validarCNPJ(id))
                                    {
                                    Swal.fire({
                                        title: 'CNPJ InvÃ¡lido!',
                                        icon: 'error',
                                        confirmButtonText: "OK",  
                                        showConfirmButton: true});
                                        $(this).val('');
                                    }
                            }
                        else
                            {
                                Swal.fire({
                                        title: 'CPF/CNPJ InvÃ¡lido!',
                                        icon: 'error',
                                        confirmButtonText: "OK",  
                                        showConfirmButton: true});
                                $(this).val('');
                            }
                }
        });
    });

    $('.telefone_celular').mask('(99)9 9999-9999');
    $('.telefone_fixo').mask('(99) 9999-9999');
    $('.cep').mask('99.999-999');
    $('.cpf').mask('999.999.999-99');
    $('.cnpj').mask('99.999.999/9999-99');
    $('.mask-money').mask("#.##9,99", {reverse: true});
    $('.data').mask('99/99/9999');
    $(".numero_nis").mask("99999999999");

function validarCNPJ(cnpj) {
 
   
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

$(".numero_nis").blur(function ()
    {
        if(!validarPIS(this.value))
            {
                 Swal.fire({
                        allowOutsideClick: false ,
                        title: 'NÃºmero do NIS InvÃ¡lido!',
                        icon:'error'
                    });
                                    
                            
            this.value='';
            }
    });
    
function validarPIS(pis) 
    {
        var multiplicadorBase = "3298765432";
        var total = 0;
        var resto = 0;
        var multiplicando = 0;
        var multiplicador = 0;
        var digito = 99;
        var numeroPIS = pis.replace(/[^\d]+/g, '');
        if (numeroPIS.length !== 11 ||
            numeroPIS === "00000000000" ||
            numeroPIS === "11111111111" ||
            numeroPIS === "22222222222" ||
            numeroPIS === "33333333333" ||
            numeroPIS === "44444444444" ||
            numeroPIS === "55555555555" ||
            numeroPIS === "66666666666" ||
            numeroPIS === "77777777777" ||
            numeroPIS === "88888888888" ||
            numeroPIS === "99999999999") 
            {
                return false;
            } 
        else 
            {
                for (var i = 0; i < 10; i++) 
                    {
                        multiplicando = parseInt(numeroPIS.substring(i, i + 1));
                        multiplicador = parseInt(multiplicadorBase.substring(i, i + 1));
                        total += multiplicando * multiplicador;
                    }
                resto = 11 - total % 11;
                resto = resto === 10 || resto === 11 ? 0 : resto;
                digito = parseInt("" + numeroPIS.charAt(10));
                return resto === digito;
            }
    }
function TestaCPF(strCPF) {
   
    var Soma;
    var Resto;
    Soma = 0;
    
  if (strCPF == "00000000000") return false;
  if (strCPF == "11111111111") return false;
  if (strCPF == "22222222222") return false;
  if (strCPF == "33333333333") return false;
  if (strCPF == "44444444444") return false;
  if (strCPF == "55555555555") return false;
  if (strCPF == "66666666666") return false;
  if (strCPF == "77777777777") return false;
  if (strCPF == "88888888888") return false;
  if (strCPF == "99999999999") return false;
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function apenasNumeros(string) 
{
    var numsStr = string.replace(/[^0-9]/g,'');
    return (numsStr);
}

function Swal_aguarde(titulo,texto='',html='')
    {
        Swal.fire({
            title: titulo,
            text: texto,
            html: html,
            timerProgressBar: true,
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading()
            },
        });       
    }
$('input[type=text]').change(function ()
    {
        this.value=this.value.toUpperCase();
    });
$('textarea.form-control').change(function ()
    {
        $(this).html($(this).html().toUpperCase());
    });
                    
function envia_upload_arquivo(opcao,cod_concurso,cod_inscricao,cpf_candidato,atualiza_pagina)
    {
        console.log(atualiza_pagina);
        if((opcao=='')||(cod_concurso=='')||(cod_inscricao=='')||(cpf_candidato=='')||(atualiza_pagina=='')) return false;
        Swal.fire({
        title: "Selecione o Novo Documento",
        html: '<form  id="formulario" action="" method="post" enctype="multipart/form-data">\n\
                    <input type="file" name="anexo_arquivo" required id="anexo_arquivo"class="form-text"  accept=".jpeg,.png,.gif, .jpg,.doc, .docx,.pdf" style="padding-top: 17px" />\n\
                </form>',
            allowEscapeKey: false,
            allowOutsideClick: false,
    }).then(function(result) {
        if(result.value)
                {
                    var formData = new FormData(jQuery('#formulario')[0]);
                    Swal_aguarde('Salvando Arquivo','',
                       '<div class="progress">'+
                        '<div class="progress-bar progress-bar-striped bg-warning" id="progress_bar_upload" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>'+
                        '</div><br>Aguarde!');

                    $.ajax({
                               url: Site_atual+'Inscricao/altera_documento_anexo/'+cod_concurso+'/'+cod_inscricao+'/'+cpf_candidato+'/'+opcao,
                               type: 'POST',
                               data: formData,
                               success: function(data) 
                                   { console.log(data);
                                       Swal.close();
                                       var data=JSON.parse(data)
                                       
                                       Swal.fire({
                                           title: "Salvando InscriÃ§Ã£o",
                                           text: data.mensagem,
                                           //type: obj.status,
                                           icon: data.status,
                                           confirmButtonText: "OK",  
                                           timer: 3000,
                                           showConfirmButton: true,
                                           }).then((result) => {
                                               if(atualiza_pagina)window.location.reload(true);
                                               });
                                   },
                               cache: false,
                               contentType: false,
                               processData: false,
                               xhr: function() 
                                   { // Custom XMLHttpRequest
                                       var myXhr = $.ajaxSettings.xhr();
                                       if (myXhr.upload)
                                           { // Avalia se tem suporte a propriedade upload
                                               myXhr.upload.addEventListener('progress', function(evt) {
                                               if (evt.lengthComputable) 
                                                   {
                                                       var percentComplete = evt.loaded / evt.total;
                                                       percentComplete = parseInt(percentComplete * 100);
                                                       $('#progress_bar_upload').attr('aria-valuenow', percentComplete).css('width', percentComplete+'%');                                
                                                   }

                                               }, false);
                                           }
                                       return myXhr;
                                   }
                               });
                    }
        });
    }
            