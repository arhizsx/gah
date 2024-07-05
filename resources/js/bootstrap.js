import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

$(".location_filters").on("change", function(){
    console.log($(this));
});
