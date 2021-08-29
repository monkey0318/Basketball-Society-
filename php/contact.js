window.onload = init;

function inti() {
    document.forms[0].onsubmit = function () {
        if (this.checkValidity()) {
                if (confirm("Are sure that you would like to submit the form?") == 1) {
                    var name = document.getElementById('firstname').value;
                    alert(name + " , your form has been successfully submitted. We will contact you in few days, Thank You ！")

                    window.print();
                    return true;
                }
            else
            {
                alert("Please fill the comment.");
                return false;
            }
        }
    }
}



