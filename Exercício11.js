 var frm= document.querySelector("form")
         var resposta= document.querySelector("h3")
         frm.addEventListener ("submit" , (e) => {
         var altura= document.querySelector("form")  
         var peso = frm.peso
         var imc = (peso / (altura*altura))
         var categoria
         categoria = "O seu Imc é: " + imc
         
         if(imc<18.5){
        
        categoria = "Você está abaixo na média"

        }else if(imc>=18.5 && imc<24.9){
            categoria ="Você está na média"
    
        }else if (imc<= 25.0 && imc<29.9){    
        
        categoria = "Você está acima da média"
        
        }else if (imc>=30.0)
        
       categoria = "Você está ficando obeso, está na hora de procurar um médico"
       else {
        
      }

      resposta.innerText=(`Seu Imc é : ${imc}) portanto  
        
