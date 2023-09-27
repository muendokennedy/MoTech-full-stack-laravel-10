const inputAdmin = document.querySelector('.file-admin');
      const fileBoxAdmin =  document.querySelector('.input-admin');
      const originalinfoAdmin =  document.querySelector('.original-info-admin');

    inputAdmin.addEventListener('change', function(){
        // input1.click();
        let file = this.files[0];
        let fileReader = new FileReader();
        fileReader.onload = () => {
          let fileURL = fileReader.result;
          let imgTag = `<div class="uploaded-image">
          <img src="${fileURL}" alt="">
          <button type="button" class="remove-btn1-admin"><i class="fa-solid fa-times"></i></button>
        </div>`;
        fileBoxAdmin.innerHTML  = imgTag;
        }
        fileReader.readAsDataURL(file);
      });

      window.onclick = (e) => {
          if(e.target.classList.contains('remove-btn1-admin')){
          e.target.parentElement.remove();
          fileBoxAdmin.appendChild(originalinfoAdmin);
          }else if(e.target.parentElement.classList.contains('remove-btn1-admin')){
            e.target.parentElement.parentElement.remove();
            fileBoxAdmin.appendChild(originalinfoAdmin);
          }
      }
