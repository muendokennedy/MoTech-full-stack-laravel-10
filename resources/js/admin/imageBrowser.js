

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

