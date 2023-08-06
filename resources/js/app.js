import './bootstrap';
import toastr from 'toastr';


Livewire.start();


toastr.options = {
  "closeButton": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "100",
  "hideDuration": "1000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

Livewire.on('alert', ({ type, message }) => {
  toastr[type](message);

})


// window.livewire.on('alert', param => {
//   toastr[param['type']](param['message']);
// });


