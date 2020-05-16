
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}


function confirmDelete() {
    var doc; 
            var result = confirm("Are You sure to delete this person?!"); 
            if (result == true) { 
                doc = "OK! the person is deleted."; 
            } else { 
                doc = "Hmm! does not deleted."; 
            } 
            document.getElementById("msg_delete").innerHTML = doc;  
}


function showTime() {
    'use strict';
    var now = new Date(),
        hou = now.getUTCHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pm  = ' PM';
    if (sec < 10) {
    
    sec = '0' + sec;
        
    }
    if (min < 10) {
    
    min = '0' + min;
        
    }
    if (hou < 10) {
    
    hou = '0' + hou;
        
    }
    
    document.getElementById('oclock').textContent = hou + ':' + min + ':' + sec +pm;
    
}
window.onload = function () {
    
    'use strict';
    
    setInterval(showTime, 1000);
 };

 function showInfoModal(id) {
    document.getElementById('modal_title').innerHTML = document.getElementById('modal_title' + id).textContent;
    document.getElementById('modal_price').innerHTML = document.getElementById('modal_price' + id).textContent;
    document.getElementById('modal_debut').innerHTML = document.getElementById('modal_debut' + id).textContent;
    document.getElementById('modal_img').src = document.getElementById('modal_img' + id).getAttribute('data-setbg');
 }

