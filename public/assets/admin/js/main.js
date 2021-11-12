/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/admin/pages/imoveis.js":
/*!*********************************************!*\
  !*** ./resources/js/admin/pages/imoveis.js ***!
  \*********************************************/
/***/ (() => {

getGaleria();
getPlantas();
getStatus();
/*
*
* GALERIA
*
*/
// Buscando as Imagens do imóvel

function getGaleria() {
  var imovel_id = $('#imovel_id').val();
  var url = $('#getGaleria').val();
  $.ajax({
    url: url,
    method: 'POST',
    data: {
      imovel_id: imovel_id
    },
    dataType: 'json',
    success: function success(data) {
      $('#galeria').html(data);
    }
  });
  return false;
} // Upload Galeria


$(document).on('click', '#uploadGaleria', function () {
  if ($('#images').val() != '') {
    var formData = new FormData();
    var url = $('#urlUploadGaleria').val();
    var imovel_id = $('#imovel_id').val();
    var TotalFiles = $('#images')[0].files.length; //Total files

    var files = $('#images')[0];

    for (var i = 0; i < TotalFiles; i++) {
      formData.append('images' + i, files.files[i]);
    }

    formData.append('TotalFiles', TotalFiles);
    formData.append('imovel_id', imovel_id);
    $.ajax({
      type: 'POST',
      url: url,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      beforeSend: function beforeSend() {
        $('#galeria').html('<h5 class="text-center my-4 w-100">Carregando...</h5>');
      },
      success: function success(response) {
        getGaleria();
        setTimeout(function () {
          $('.alert').html(response.success);
          $('.alert').addClass('alert-success').fadeIn('slow');
        }, 200);
        setTimeout(function () {
          $('.alert').hide(400);
          $('.alert').removeClass('alert-success');
        }, 2000);
      },
      error: function error(response) {
        setTimeout(function () {
          $('.alert').html(response.erro);
          $('.alert').addClass('alert-danger').fadeOut('slow');
        }, 200);
        setTimeout(function () {
          $('.alert').hide(400);
          $('.alert').removeClass('alert-danger');
        }, 2000);
      }
    });
  } else {
    $('.alert').html('Por favor, selecione uma imagem!');
    $('.alert').addClass('alert-warning').fadeIn('slow');
    setTimeout(function () {
      $('.alert').hide(400);
      $('.alert').removeClass('alert-warning');
    }, 2000);
  }
}); // Excluindo Imagens

$(document).on('click', '.delete_image', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $('.delete').attr('data-id', id);
  $('.delete').attr('data-url', url);
  $('.delete').addClass('deleteImage');
  $('.deleteImage').removeClass('delete');
});
$(document).on('click', '.deleteImage', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $.ajax({
    url: url,
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    cache: false,
    success: function success(response) {
      $('#modalDelete').modal('toggle');
      $('.deleteImage').addClass('delete');
      $('.deleteImage').removeData('id');
      $('.delete').removeClass('deleteImage');
      getGaleria();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn('slow');
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
        $('.alert').removeClass('alert-success');
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut('slow');
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
        $('.alert').removeClass('alert-danger');
      }, 2000);
    }
  });
});
/*
*
* PLANTAS
*
*/
// Buscando as Imagens do imóvel

function getPlantas() {
  var imovel_id = $('#imovel_id').val();
  var url = $('#getPlantas').val();
  $.ajax({
    url: url,
    method: 'POST',
    data: {
      imovel_id: imovel_id
    },
    dataType: 'json',
    success: function success(data) {
      $('#galeriaPlantas').html(data);
    }
  });
  return false;
} // Upload Planta


$(document).on('click', '#uploadPlanta', function () {
  if ($('#imagesPlanta').val() != '') {
    var formData = new FormData();
    var url = $('#urlUploadPlanta').val();
    var imovel_id = $('#imovel_id').val();
    var TotalFiles = $('#plantas')[0].files.length; //Total files

    var files = $('#plantas')[0];

    for (var i = 0; i < TotalFiles; i++) {
      formData.append('images' + i, files.files[i]);
    }

    formData.append('TotalFiles', TotalFiles);
    formData.append('imovel_id', imovel_id);
    $.ajax({
      type: 'POST',
      url: url,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      beforeSend: function beforeSend() {
        $('#galeria').html('<h5 class="text-center my-4 w-100">Carregando...</h5>');
      },
      success: function success(response) {
        getPlantas();
        setTimeout(function () {
          $('.alert').html(response.success);
          $('.alert').addClass('alert-success').fadeIn('slow');
        }, 200);
        setTimeout(function () {
          $('.alert').hide(400);
          $('.alert').removeClass('alert-success');
        }, 2000);
      },
      error: function error(response) {
        setTimeout(function () {
          $('.alert').html(response.erro);
          $('.alert').addClass('alert-danger').fadeOut('slow');
        }, 200);
        setTimeout(function () {
          $('.alert').hide(400);
          $('.alert').removeClass('alert-danger');
        }, 2000);
      }
    });
  } else {
    $('.alert').html('Por favor, selecione uma imagem!');
    $('.alert').addClass('alert-warning').fadeIn('slow');
    setTimeout(function () {
      $('.alert').hide(400);
      $('.alert').removeClass('alert-warning');
    }, 2000);
  }
}); // Excluindo Imagens

$(document).on('click', '.delete_planta', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $('.delete').attr('data-id', id);
  $('.delete').attr('data-url', url);
  $('.delete').addClass('deletePlanta');
  $('.deletePlanta').removeClass('delete');
});
$(document).on('click', '.deletePlanta', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $.ajax({
    url: url,
    method: 'POST',
    data: {
      id: id
    },
    dataType: 'json',
    cache: false,
    success: function success(response) {
      $('#modalDelete').modal('toggle');
      $('.deletePlanta').addClass('delete');
      $('.deletePlanta').removeData('id');
      $('.delete').removeClass('deletePlanta');
      getPlantas();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn('slow');
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
        $('.alert').removeClass('alert-success');
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut('slow');
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
        $('.alert').removeClass('alert-danger');
      }, 2000);
    }
  });
});
/*
**
** STATUS
**
*/
// Buscando as Status do imóvel

function getStatus() {
  var imovel_id = $("#imovel_id").val();
  var url = $('#getStatus').val();
  $.ajax({
    url: url,
    method: "POST",
    data: {
      imovel_id: imovel_id
    },
    dataType: "json",
    success: function success(data) {
      $('#statusImovel').html(data);
    }
  });
  return false;
}

; // Insert Status

$(document).on('click', '#createStatus', function () {
  var imovel_id = $("#imovel_id").val();
  var status_id = $("#status_id").val();
  var porcentagem = $("#porcentagem").val();
  var url = $('#urlCreateStatus').val();
  $.ajax({
    method: 'POST',
    url: url,
    data: {
      imovel_id: imovel_id,
      status_id: status_id,
      porcentagem: porcentagem
    },
    dataType: 'json',
    success: function success(response) {
      getStatus();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
}); // Excluindo Status

$(document).on('click', '.delete_status', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $('.delete').attr('data-id', id);
  $('.delete').attr('data-url', url);
  $('.delete').addClass('deleteStatus');
  $('.deleteStatus').removeClass('delete');
});
$(document).on('click', '.deleteStatus', function () {
  var id = $(this).data('id');
  var url = $(this).data('url');
  $.ajax({
    url: url,
    method: "POST",
    data: {
      id: id
    },
    dataType: "json",
    cache: false,
    success: function success(response) {
      $('#modalDelete').modal('toggle');
      $('.deleteStatus').addClass('delete');
      $('.deleteStatus').removeData('id');
      $('.delete').removeClass('deleteStatus');
      getStatus();
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
}); // Requerendo dados do Status

$('#modalEditStatus').on('show.bs.modal', function (e) {
  var id = e.relatedTarget.id;
  var url = $('#getStatusEdit').val();
  $.ajax({
    cache: false,
    type: 'POST',
    url: url,
    data: 'id=' + id,
    dataType: 'json',
    success: function success($data) {
      $('#porcentagem_edit').val($data.porcentagem);
      $('#id_edit').val($data.id);
      ;
    }
  });
}); //Função para Editar Status

$('#formEditStauts').submit(function () {
  var dados = $(this).serialize();
  var url = $('#urlUpdateStatus').val();
  $.ajax({
    type: "POST",
    url: url,
    data: dados,
    dataType: 'json',
    success: function success(response) {
      getStatus();
      $('#modalEditStatus').modal('hide');
      setTimeout(function () {
        $('.alert').html(response.success);
        $('.alert').addClass('alert-success').fadeIn("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    },
    error: function error(response) {
      setTimeout(function () {
        $('.alert').html(response.erro);
        $('.alert').addClass('alert-danger').fadeOut("slow");
      }, 200);
      setTimeout(function () {
        $('.alert').hide(400);
      }, 2000);
    }
  });
  return false;
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!************************************!*\
  !*** ./resources/js/admin/main.js ***!
  \************************************/
;

(function ($) {
  'use strict';

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $(document).on('click', '.delete', function () {
    var id = $(this).attr('data-id');
    $('#id').val(id);
  }); // Jquery Mask

  $('.money').mask('#.##0,00', {
    reverse: true
  });
  $('.cm').mask('##0,00', {
    reverse: true
  });
  $('.mes_ano').mask('00/0000');
  $('.summernote').summernote({
    lang: 'pt-BR',
    height: 200,
    fontNames: ['Noto Sans JP', 'Signika', 'Open Sans', 'Arial'],
    fontNamesIgnoreCheck: ['Nunito', 'Segoe UI'],
    fontSizeUnits: ['px', 'pt'],
    styleTags: ['p', {
      title: 'Blockquote',
      tag: 'blockquote',
      className: 'blockquote',
      value: 'blockquote'
    }, 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
    toolbar: [['style'], ['font', ['bold', 'underline', 'clear', 'font']], ['fontname', ['fontname']], ['fontsize', ['fontsize']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['table'], ['insert', ['link']], ['view', ['fullscreen', 'codeview', 'help']]]
  });
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    responsiveClass: true,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1,
        loop: false
      }
    }
  });
  $('.select').select2({
    placeholder: 'Selecione uma opção'
  });
  $(function ($) {
    $('#geocompletecad').geocomplete({
      country: 'BR',
      map: '#mapa',
      details: 'form',
      types: ['geocode', 'establishment']
    });
    $('#find').click(function () {
      $('#geocompletecad').trigger('geocode');
    }).click();
  }); //Tabs

  var url = location.href.replace(/\/$/, '');

  if (location.hash) {
    var hash = url.split('#');
    $('#tabStep a[href="#' + hash[1] + '"]').tab('show');
    url = location.href.replace(/\/#/, '#');
    history.replaceState(null, null, url);
    setTimeout(function () {
      $(window).scrollTop(0);
    }, 400);
  }

  $('a[data-toggle="tab"]').on('click', function () {
    var newUrl;
    var hash = $(this).attr('href');
    newUrl = url.split('#')[0] + hash;
    newUrl += '/';
    history.replaceState(null, null, newUrl);
  });

  __webpack_require__(/*! ./pages/imoveis.js */ "./resources/js/admin/pages/imoveis.js");
})(jQuery, window, document);
})();

/******/ })()
;