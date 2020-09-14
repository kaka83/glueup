var links = document.querySelectorAll('ins');

links.forEach(function (link) {
    var linkWidth = parseInt(link.offsetWidth);
    var svg = createSVG(linkWidth);
    insertBefore(svg, link);
});
function createSVG(linkWidth) {
    const span = document.createElement('span');
    span.className = 'svgline', 'fadingEffect' ;
     
    const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
    svg.setAttribute("class", "svgline fadingEffect");
    svg.setAttribute("width", linkWidth);
    svg.setAttribute("height", "20");

    const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
    var pathD = randomizePath(linkWidth);

    path.setAttribute("d", pathD);
    path.setAttribute("fill", "transparent");
    path.setAttribute("stroke", "#0d62fe");
    path.setAttribute("stroke-width", "7");
    path.setAttribute("stroke-linecap", "round");

    svg.appendChild(path);
    span.appendChild(svg);

    return svg;
}

function randomizePath(linkWidth) {
    var moveYMin = 5;
    var moveYMax = 12;
    var curveXMin = 20;
    var curveXMax = linkWidth; /* Width of the link */
    var curveYMin = 5;
    var curveYMax = 20;
    var endYMin = 5;
    var endYMax = 10;
    var moveY = Math.floor(Math.random() * (moveYMax - moveYMin)) + moveYMin;
    var curveX = Math.floor(Math.random() * (curveXMax - curveXMin)) + curveXMin;
    var curveY = Math.floor(Math.random() * (curveYMax - curveYMin)) + curveYMin;
    var endY = Math.floor(Math.random() * (endYMax - endYMin)) + endYMin;

    var newPath = `M5 ${moveY} Q ${curveX} ${curveY} ${linkWidth - 7} ${endY}`;

    return newPath;
}
   /* var svg = createSVG(linkWidth);
    insertAfter(svg, link);*/

    function insertBefore(el, referenceNode) {
        referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
}