const input1 = document.querySelector('.file1');
const input2 = document.querySelector('.file2');
const input3 = document.querySelector('.file3');
const input4 = document.querySelector('.file4');
const fileBox1 =  document.querySelector('.input-box1');
const fileBox2 =  document.querySelector('.input-box2');
const fileBox3 =  document.querySelector('.input-box3');
const fileBox4 =  document.querySelector('.input-box4');
const orignalInfoBox1 =  document.querySelector('.original-info1');
const orignalInfoBox2 =  document.querySelector('.original-info2');
const orignalInfoBox3 =  document.querySelector('.original-info3');
const orignalInfoBox4 =  document.querySelector('.original-info4');

const input1Edit = document.querySelector('.file1-edit');
const input2Edit = document.querySelector('.file2-edit');
const input3Edit = document.querySelector('.file3-edit');
const input4Edit = document.querySelector('.file4-edit');
const fileBox1Edit =  document.querySelector('.input-box1-edit');
const fileBox2Edit =  document.querySelector('.input-box2-edit');
const fileBox3Edit =  document.querySelector('.input-box3-edit');
const fileBox4Edit =  document.querySelector('.input-box4-edit');
const orignalInfoBox1Edit =  document.querySelector('.original-info1-edit');
const orignalInfoBox2Edit =  document.querySelector('.original-info2-edit');
const orignalInfoBox3Edit =  document.querySelector('.original-info3-edit');
const orignalInfoBox4Edit =  document.querySelector('.original-info4-edit');

input1Edit.addEventListener('change', function(){
  // input1.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn1-edit"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox1Edit.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input2Edit.addEventListener('change', function(){
  // input2.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn2-edit"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox2Edit.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input3Edit.addEventListener('change', function(){
  // input3.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn3-edit"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox3Edit.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input4Edit.addEventListener('change', function(){
  // input4.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn4-edit"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox4Edit.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});

input1.addEventListener('change', function(){
  // input1.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn1"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox1.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input2.addEventListener('change', function(){
  // input2.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn2"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox2.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input3.addEventListener('change', function(){
  // input3.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn3"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox3.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});
input4.addEventListener('change', function(){
  // input4.click();
  let file = this.files[0];
  let fileReader = new FileReader();
  fileReader.onload = () => {
    let fileURL = fileReader.result;
    let imgTag = `<div class="uploaded-image">
    <img src="${fileURL}" alt="">
    <button type="button" class="remove-btn4"><i class="fa-solid fa-times"></i></button>
  </div>`;
  fileBox4.innerHTML  = imgTag;
  }
  fileReader.readAsDataURL(file);
});

window.onclick = (e) => {
  if(e.target.classList.contains('remove-btn1')){
    e.target.parentElement.remove();
    fileBox1.appendChild(orignalInfoBox1);
  }else if(e.target.parentElement.classList.contains('remove-btn1')){
    e.target.parentElement.parentElement.remove();
    fileBox1.appendChild(orignalInfoBox1);
  } else if(e.target.classList.contains('remove-btn2')){
    e.target.parentElement.remove();
    fileBox2.appendChild(orignalInfoBox2);
  }else if(e.target.parentElement.classList.contains('remove-btn2')){
    e.target.parentElement.parentElement.remove();
    fileBox2.appendChild(orignalInfoBox2);
  } else if(e.target.classList.contains('remove-btn3')){
    e.target.parentElement.remove();
    fileBox3.appendChild(orignalInfoBox3);
  }else if(e.target.parentElement.classList.contains('remove-btn3')){
    e.target.parentElement.parentElement.remove();
    fileBox3.appendChild(orignalInfoBox3);
  } else if(e.target.classList.contains('remove-btn4')){
    e.target.parentElement.remove();
    fileBox4.appendChild(orignalInfoBox4);
  }else if(e.target.parentElement.classList.contains('remove-btn4')){
    e.target.parentElement.parentElement.remove();
    fileBox4.appendChild(orignalInfoBox4);
  }else if(e.target.classList.contains('remove-btn1-edit')){
    e.target.parentElement.remove();
    fileBox1Edit.appendChild(orignalInfoBox1Edit);
  }else if(e.target.parentElement.classList.contains('remove-btn1-edit')){
    e.target.parentElement.parentElement.remove();
    fileBox1Edit.appendChild(orignalInfoBox1Edit);
  } else if(e.target.classList.contains('remove-btn2-edit')){
    e.target.parentElement.remove();
    fileBox2Edit.appendChild(orignalInfoBox2Edit);
  }else if(e.target.parentElement.classList.contains('remove-btn2-edit')){
    e.target.parentElement.parentElement.remove();
    fileBox2Edit.appendChild(orignalInfoBox2Edit);
  } else if(e.target.classList.contains('remove-btn3-edit')){
    e.target.parentElement.remove();
    fileBox3Edit.appendChild(orignalInfoBox3Edit);
  }else if(e.target.parentElement.classList.contains('remove-btn3-edit')){
    e.target.parentElement.parentElement.remove();
    fileBox3Edit.appendChild(orignalInfoBox3Edit);
  } else if(e.target.classList.contains('remove-btn4-edit')){
    e.target.parentElement.remove();
    fileBox4Edit.appendChild(orignalInfoBox4Edit);
  }else if(e.target.parentElement.classList.contains('remove-btn4-edit')){
    e.target.parentElement.parentElement.remove();
    fileBox4Edit.appendChild(orignalInfoBox4Edit);
  }
}

