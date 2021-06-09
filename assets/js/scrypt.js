const app = new Vue({

  el: '#root',
  data:{
    apiURL: 'http://localhost:81/php-ajax-dischi/php-ajax-dischi/api.php',
    listcover: [],
  },
  created(){
    axios.get(this.apiURL)
    .then(resp=>{
      this.listcover = resp.data;
      console.log(this.lista_cover);
    }).catch(err=>{
      console.log(err);
    })    
  }
});