window.onload = init;

function init() {
var Today=new Date();

document.getElementById('date').value= Today.getDate()+"/"+ 
(Today.getMonth()+1) + "/" +Today.getFullYear();

document.getElementById('customerName').focus();

document.forms[0].onsubmit = function() {
    
//checkValidity is check all input when the name or tel and others haven't key in
if (this.checkValidity()) {
if(document.getElementById('totalAmount').value>0 ) 
{

if (confirm("Are sure that you would like to submit the order?") == 1){
var name = document.getElementById('customerName').value;
alert( name + " , your order has been successfully submitted. You may receive your order items wihtin in 1 days ")

window.print();
return true;    
}
} 

else 
{ 
alert("Please select at least one item.");   
return false;      
} 
}
}
}

function cancelorder(){
if (confirm("Are you sure you want to cancel this order?") == 1)
{
document.order.reset();
window.location.reload();
}
}


