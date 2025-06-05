
const productContainers = [...document.querySelectorAll('.areas_lista')];
const nxtBtn = [...document.querySelectorAll('.seta-direita')];
const preBtn = [...document.querySelectorAll('.seta-esquerda')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
