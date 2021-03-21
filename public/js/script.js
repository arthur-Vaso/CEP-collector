
function clearFields(){
  document.getElementById('street').value=("");
  document.getElementById('district').value=("");
  document.getElementById('city').value=("");
  document.getElementById('state').value=("");
}

function clearAllFields(){
  document.getElementById("name").value = "";
  document.getElementById("zipcode").value = "";
  document.getElementById('street').value=("");
  document.getElementById("number").value = "";
  document.getElementById("complement").value = "";
  document.getElementById('district').value=("");
  document.getElementById('city').value=("");
  document.getElementById('state').value=("");
}


function myAdress(element){
  
  if (!("erro" in element)) {
    document.getElementById('street').value=(element.logradouro);
    document.getElementById('district').value=(element.bairro);
    document.getElementById('city').value=(element.localidade);
    document.getElementById('state').value=(element.uf);
  } else {
    
    var zip = document.getElementById("zipcode").value.replace(/\D/g, '');

    if (zip != "") {
      var zipValid = /^[0-9]{8}$/;
      
      if(zipValid.test(zip)) {
        var script = document.createElement('script');
        
        script.src =  getZipcode('https://api.postmon.com.br/v1/cep/' + zip);
        
        document.body.appendChild(script);

        searchSeconderyZipcode('https://api.postmon.com.br/v1/cep/' + zip)
      } else {
          alert("CEP inválido.");
          clearFields();
        }
      }
    
  }
}

function searchSeconderyZipcode(url) {
  let status;

  try {
    fetch(url)
      .then((res) => {
        status = res.status;
        return res.json();
      })
      .then((json) => {
        myAdress(json);
      });
  } catch(err) {
      alert("Não foi possivel localizar o CEP.");
      console.error(err);
  }
}

function searchZipcode() {
  var zip = document.getElementById("zipcode").value.replace(/\D/g, '');
  
  if (zip != "") {
    var zipValid = /^[0-9]{8}$/;
    
    if(zipValid.test(zip)) {
      var script = document.createElement('script');
      
      script.src = 'https://viacep.com.br/ws/'+ zip + '/json/?callback=myAdress';
      
      document.body.appendChild(script);
      
    } else {
        alert("CEP inválido.");
        clearFields();
      }
    }
}


function createOrder(){
  if(document.getElementById("name").value == "" ||
  document.getElementById("zipcode").value == "" ||
  document.getElementById("street").value == "" ||
  document.getElementById("number").value == "" ||
  document.getElementById("district").value == "" ||
  document.getElementById("city").value == "" ||
  document.getElementById("state").value == "")
  {
    alert("Existem campos não preenchidos");
  } else {
    confirmOrder();
  }
}

function confirmOrder(){
    if (confirm("Confirmar pedido para:\n" + document.getElementById("name").value + "\nNo endreço: \n" +
    document.getElementById("street").value + " Nº " + document.getElementById("number").value + "\nBairro: " +
    document.getElementById("district").value + " - " + document.getElementById("city").value + " - " +
    document.getElementById("state").value + "\nCEP: " + document.getElementById("zipcode").value))
    {
      alert("Pedido realizado com sucesso!");
      clearAllFields();
    } else {
      clearAllFields();
    }
}