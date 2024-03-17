/*const searchBar = forms['search-books'].querySelector('input');
searchBar.addEventListener('keyup', (e) => {
  const term = e.target.value.toLowerCase();
  const books = list.getElementsByTagName('li');
  Array.from(books).forEach((book) => {
    const title = book.firstElementChild.textContent;
    if(title.toLowerCase().indexOf(e.target.value) != -1){
      book.style.display = 'block';
    } else {
      book.style.display = 'none';
    }
  });
});*/


const cvList = document.getElementById('cvList');
const cvItems = cvList.getElementsByClassName('cvItem');

const filterCVs = () => {
  const domainFilter= document.querySelector('input[type=radio][name="R1"]:checked');
  const functionFilter = document.querySelector('input[type=radio][name="R2"]:checked');
  const formationFilter = document.querySelector('input[type=radio][name="R3"]:checked');
  

 
    const domaine =document.getElementsByClassName('domaine');
    for (let i = 0; i < domaine.length; i++) {
     const domainMatch = domaine[i].innerText === domainFilter.value ;
     
    }
    const fonction =getElementsByClassName('fonction');
    for (let i = 0; i < fonction.length; i++) {
      const functionMatch = fonction[i].innerText == functionFilter.value ;
    
     }
     const formation =getElementsByClassName('formation');
     for (let i = 0; i < fonction.length; i++) {
       const formationMatch = formation[i].innerText == formationFilter.value ;
     
      }
    
    if (functionMatch && formationMatch && domainMatch) {
      cvItem.style.display = 'block';
    } else {
      cvItem.style.display = 'none';
    }
  }
document.querySelectorAll('input[name="R1"], input[name="R2"], input[name="R3"] ').forEach(input => {
  input.addEventListener('click', filterCVs);
});

document.querySelectorAll('input[name="R1"], input[name="R2"], input[name="R3"] ').forEach(input => {
  input.addEventListener('change', filterCVs);
});
