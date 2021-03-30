require('./bootstrap');

require('alpinejs');

function followUser() {
    // console.log(this.id);
    axios.post('/follow/'+this.id).then(response => {
        console.log(response.data);
        
    });
}


var followBtn = document.getElementsByClassName('follow')[0];
// console.log(followBtn);
followBtn.addEventListener('click', followUser);