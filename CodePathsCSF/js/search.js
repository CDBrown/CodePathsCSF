function clicked() {
    var id = document.getElementById('patient-id');
    var passid = "123456";

    if (id.value == passid) {
        window.open('patient_index.html');

    }
    else {
        window.alert("you do not have patient under this ID")
    }

}