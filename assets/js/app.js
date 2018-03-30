function loadProductSeacrh(jsondata) {
    if ($("#txtProd").length) { 
        $.widget("custom.catcomplete", $.ui.autocomplete, {
            _create: function () {
                this._super();
                this.widget().menu("option", "items", "> :not(.ui-autocomplete-category)");
            },
            _renderMenu: function (ul, items) {
                var that = this,
                        currentCategory = "";
                $.each(items, function (index, item) {
                    var li;
                    if (item.category != currentCategory) {
                        ul.append("<li class='ui-autocomplete-category'>" + item.category + "</li>");
                        currentCategory = item.category;
                    }
                    li = that._renderItemData(ul, item);
                    if (item.category) {
                        li.attr("aria-label", item.category + " : " + item.label);
                    }
                });
            },
            _renderItem: function (ul, item) {
                var srchTerm = this.term.trim().split(/\s+/).join('|');
                var strNewLabel = item.label;
                regexp = new RegExp('(' + srchTerm + ')', "gi");
                var strNewLabel = strNewLabel.replace(regexp, "<span style='font-weight:bold;color:black;'>$1</span>");
                return $("<li></li>").data("item.autocomplete", item).append("<a>" + strNewLabel + "</a>").appendTo(ul);
            }
        });
        $.widget("app.autocomplete", $.ui.autocomplete, {
            _renderItem: function (ul, item) {
                var re = new RegExp("(" + this.term + ")", "gi"),
                        template = "<span style='font-weight:bold;color:black;'>$1</span>",
                        label = item.label.replace(re, template),
                        $li = $("<li/>").appendTo(ul);
                $("<span/>").attr("href", "#").html(label).appendTo($li);
                return $li;
            }
        });
        $("#txtProd").catcomplete({
            delay: 0,
            source: jsondata,
            select: function (event, ui) {
                $('#txtProd').val(ui.item.label);
                $('#txtProdVal').val(ui.item.value);
                return false;
            },
            source: function (request, response) {
                var aryResponse = [];
                var arySplitRequest = request.term.toLowerCase().split(" ");
                for (i = 0; i < jsondata.length; i++) {
                    var intCount = 0;
                    for (j = 0; j < arySplitRequest.length; j++) {
                        regexp = new RegExp(arySplitRequest[j]);
                        var lbl = jsondata[i].label.toString().toLowerCase();
                        var test = lbl.match(regexp);
                        if (test) {
                            intCount++;
                        } else if (!test) {
                            intCount = arySplitRequest.length + 1;
                        }
                        if (intCount == arySplitRequest.length) {
                            aryResponse.push(jsondata[i]);
                        }
                    }
                }
                response(aryResponse);
            },
            focus: function (event, ui) {
                //$("#search").val(ui.item.label);
                return false;
            }
        });
    }
}    


function loadSimpleAutoSearch(id,jsondata){
        $("#"+id).autocomplete({
            delay: 0,
            source: jsondata,
            select: function (event, ui) {
//                $('#txtcity').val(ui.item.label);
//                $('#txtcityval').val(ui.item.value);
//                return false;
            },
            focus: function (event, ui) {
                return false;
            }
        });
}