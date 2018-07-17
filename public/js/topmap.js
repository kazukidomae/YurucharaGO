$(function(){
    var areas = [
        {code : 1, name: "北海道地方", color: "#7f7eda", hoverColor: "#b3b2ee", prefectures: [1],"english":"Hokkaido"},
        {code : 2, name: "東北地方",   color: "#759ef4", hoverColor: "#98b9ff", prefectures: [2,3,4,5,6,7],"english":"Tohoku"},
        {code : 3, name: "関東地方",   color: "#7ecfea", hoverColor: "#b7e5f4", prefectures: [8,9,10,11,12,13,14],"english":"Kanto"},
        {code : 4, name: "中部地方",   color: "#7cdc92", hoverColor: "#aceebb", prefectures: [15,16,17,18,19,20,21,22,23],"english":"Chubu"},
        {code : 5, name: "近畿地方",   color: "#ffe966", hoverColor: "#fff19c", prefectures: [24,25,26,27,28,29,30],"english":"Kinki"},
        {code : 6, name: "中国地方",   color: "#ffcc66", hoverColor: "#ffe0a3", prefectures: [31,32,33,34,35],"english":"Chugoku"},
        {code : 7, name: "四国地方",   color: "#fb9466", hoverColor: "#ffbb9c", prefectures: [36,37,38,39],"english":"Shikoku"},
        {code : 8, name: "九州地方",   color: "#ff9999", hoverColor: "#ffbdbd", prefectures: [40,41,42,43,44,45,46,47],"english":"Kyushu"},
    ];

    $("#map-container").japanMap({
        width: window.parent.screen.width,
        color: "#000000",
        selection: "area",
        areas: areas,
        backgroundColor : "#ffffff",
        borderLineColor: "#ffffff",
        borderLineWidth : 0.25,
        lineColor : "#a0a0a0",
        lineWidth: 1,
        drawsBoxLine: false,
        showsAreaName: true,
        areaNameType: "english",
        showsPrefectureName: false,
        prefectureNameType: "english",
        movesIslands : true,
        fontSize : 11,
        onSelect : function(data){
          var data = "#" + data.code;
          var noTargetData = $(this).siblings("data");
          console.log(data);
          $(this).find(".accordion__switch").click(function() {
              $(this).next(".accordion__container").slideToggle();
              $(this).toggleClass("open");
              noTargetData.find(".accordion__container").slideUp();
              noTargetData.find(".accordion__switch").removeClass("open");
      });
    }
  });
});
(function($) {
// 読み込んだら開始
$(function() {
    // アコーディオン
    var accordion = $(".accordion");
    accordion.each(function () {
        var noTargetAccordion = $(this).siblings(accordion);
        $(this).find(".accordion__switch").click(function() {
            $(this).next(".accordion__container").slideToggle();
            $(this).toggleClass("open");
            noTargetAccordion.find(".accordion__container").slideUp();
            noTargetAccordion.find(".accordion__switch").removeClass("open");
        });
    });
  });
})(jQuery);
