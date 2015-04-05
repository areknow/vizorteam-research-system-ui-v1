$('#tabs')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
$('#wordcloud1')
    .awesomeCloud({
    "color" : {
        "background" : "rgba(255,255,255,0)", // default is transparent
        "start" : "#aaa", // color of the smallest font
        "end" : "#4a4a4a"}, // color of the largest font
    "size" : {
        "grid" : 8,
        "factor" : 4,
        "normalize" : true },
    "options" : {
        "color" : "gradient",
        "rotationRatio" : 0,
        "printMultiplier" : 3,
        "sort" : "random" },
    "font" : "'Open Sans', sans-serif",
    "shape" : "square" });