
var phraseEnglish = document.getElementById("phraseEnglish");

var button = document.getElementById("change");
var random = Math.random();

// English phrases
// Translations taken from here: http://www.travelsintranslation.com/2014/01/cantonese-chinese-new-year-phrases/
var phrasesE = [
	"Năm hết Tết đến đón hên về nhà. <br /> Quà cáp bao la. <br /> Một nhà không đủ. <br />Vàng bạc đầy tủ. <br />Gia chủ phát tài.",
	"Niên niên như ý xuân <br /> Tuế tuế bình an nhật",
	"Hoa khai phú quý <br /> Trúc báo bình an",
	"Xuân an khang thịnh vượng <br /> Niên phúc thọ miên trường",
	"Xuân sang cội phúc sinh nhành lộc <br /> Tết về cây đức trổ thêm hoa.",
	"Tân niên nạp dư khánh <br /> Gia tiết hiệu trường xuân.",
	"Cạn ly mừng năm qua đắc lộc <br /> Nâng cốc chúc năm mới phát tài.",
	"Lộc biếc, mai vàng, xuân hạnh phúc <br /> Đời vui, sức khỏe, tết an khang"
];

if(phraseEnglish){
    phraseEnglish.innerHTML =  phrasesE[Math.floor(random * phrasesE.length)];
    button.addEventListener("click", function() {
        var random = Math.random();
        console.log(random);
        phraseEnglish.innerHTML  = phrasesE[Math.floor(random * phrasesE.length)];
    });
}

