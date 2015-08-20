var _$ = ["tbody", "#selecting", "display", "block", "#selecting", "正在查询", " 总进度", "%", "somd5_table", "somd5_table", "#selecting", "查询完毕!没有搜索到关键字数据 耗时:	", "毫秒", "#selecting", "查询完毕! 数据量:", "条 耗时:", "毫秒", "#selecting", "查询完毕! 数据量:", "条 耗时:", "毫秒", 'POST', "addRow", "select_act=", "&match_act=", "&key=", "&table=", 'ajax.php?act=select', "#somd5_table", "display", "block", "#key", '', "#key", "请输入查询内容/关键字/邮箱", "关键字长度大于4", "#select_act", "#match_act", "value_tables", "没有找到您搜索的内容", "SocialDatabase"];
var Gvar1;
var Gvar2;

function addRow(somd5comed2bd7eb6, somd5com811fa93b4, somd5comf49be7e59, somd5com5b49d9f12) {
	var somd5comf94f3be31 = value_tables["insertRow"]();
	var somd5com6cd7bc889 = somd5comf94f3be31["insertCell"](0);
	var somd5com6d6674984 = somd5comf94f3be31["insertCell"](1);
	var somd5comeff53bcd1 = somd5comf94f3be31["insertCell"](2);
	var somd5com4823e252c = somd5comf94f3be31["insertCell"](3);
	somd5com6cd7bc889["innerHTML"] = somd5comed2bd7eb6;
	somd5com6d6674984["innerHTML"] = somd5com811fa93b4;
	somd5comeff53bcd1["innerHTML"] = somd5comf49be7e59;
	somd5com4823e252c["innerHTML"] = somd5com5b49d9f12
};

function get_del() {
	$(_$[0])["empty"]()
};

function get_jdt(somd5com3de2f8f6d, somd5com738c8372f, somd5comdcaedb43e) {
	$(_$[1])["css"](_$[2], _$[3]);
	var somd5comf78518fb1 = (somd5com3de2f8f6d / somd5com738c8372f) * 100;
	var somd5comd152c7b41 = decimal(somd5comf78518fb1, 1);
	Administry["progress"](_$[4], somd5comd152c7b41, 100, _$[5] + somd5comdcaedb43e + _$[6] + somd5comd152c7b41 + _$[7])
};

function get_okcount() {
	stend = new Date()["getTime"]() - Gvar2;
	var somd5com4d38b6944 = document["getElementById"](_$[8]);
	var somd5comf1d14de2e = somd5com4d38b6944["rows"]["length"];
	if (somd5comf1d14de2e == 1) {
		var somd5com36f2c91c7 = document["getElementById"](_$[9]);
		var somd5comb9e3341a3 = somd5com36f2c91c7["rows"]["length"];
		if (somd5comb9e3341a3 == 1) {
			Administry["progress"](_$[10], 100, 100, _$[11] + (stend) + _$[12])
		} else {
			Administry["progress"](_$[13], 100, 100, _$[14] + (somd5comf1d14de2e - 1) + _$[15] + (stend) + _$[16])
		}
	} else {
		Administry["progress"](_$[17], 100, 100, _$[18] + (somd5comf1d14de2e - 1) + _$[19] + (stend) + _$[20])
	}
};

function decimal(somd5com3b1df0e8d, somd5comf46beb405) {
	var somd5com956a89722 = Math["pow"](10, somd5comf46beb405);
	return Math["round"](somd5com3b1df0e8d * somd5com956a89722) / somd5com956a89722
};

function ajax_post(somd5come0b7918e1, somd5comf53e662dd, somd5com25f9df3a7, somd5comb39f98f6a) {
	$["ajax"]({
		type: _$[21],
		url: somd5come0b7918e1,
		data: somd5comf53e662dd,
		success: function(somd5com9a3a7ef82) {
			if (somd5com9a3a7ef82["indexOf"](_$[22]) >= 0) {
				eval(somd5com9a3a7ef82)
			};
			if (somd5com25f9df3a7 == database["length"]) {
				get_okcount()
			}
		}
	})
};

function get_data(somd5com490d63bb2, somd5combdba21b9c, somd5comd7f929c0a, somd5com4af3e5365, somd5comb93c3a502) {
	get_jdt(somd5comb93c3a502 + 1, somd5com4af3e5365["length"], somd5com4af3e5365[somd5comb93c3a502]);
	var somd5comf53e662dd = _$[23] + somd5combdba21b9c + _$[24] + somd5comd7f929c0a + _$[25] + somd5com490d63bb2 + _$[26] + somd5com4af3e5365[somd5comb93c3a502];
	ajax_post(_$[27], somd5comf53e662dd, Gvar1 + 1, somd5com4af3e5365["length"]);
	Gvar1 = Gvar1 + 1
};

function getdata() {
	$(_$[28])["css"](_$[29], _$[30]);
	get_del();
	var somd5com490d63bb2 = $(_$[31])["val"]();
	if (somd5com490d63bb2 == _$[32]) {
		$(_$[33])["focus"]();
		alert(_$[34]);
		return false
	};
	if (somd5com490d63bb2["length"] < 4) {
		alert(_$[35]);
		return false
	};
	var somd5combdba21b9c = $(_$[36])["val"]();
	var somd5comd7f929c0a = $(_$[37])["val"]();
	Gvar2 = new Date()["getTime"]();
	Gvar1 = 0;
	for (var somd5comb93c3a502 = 0; somd5comb93c3a502 < database["length"]; somd5comb93c3a502++) {
		get_data(somd5com490d63bb2, somd5combdba21b9c, somd5comd7f929c0a, database, somd5comb93c3a502)
	}
};

function gat_kong() {
	var somd5com16af76eea = document["getElementById"](_$[38])["rows"]["length"];
	if (somd5com16af76eea == 0) {
		alert(_$[39])
	}
};

function dataxxxx() {
	var somd5comea98952b0 = _$[40]
}