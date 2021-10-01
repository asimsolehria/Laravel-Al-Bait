
/****************************************************************
* Selector plug that made select tag in to custome select style *
*****************************************************************/
(function($){
	$.fn.dependselect2 = function(option){
		var getDataById = function(list, id){
			return list.filter(function(item){
				return (id==0 || id.includes(item.id)) ? true : false;
			})
		}
		this.each(function(){
			var $this = $(this),
				select = $this.data('select'),
				dependor = $('#'+select)
				dependorData = [],
				selected = $this.find('option:selected');

			$.each($('#'+select+' option'), function(i, item){
				var value = $(item).val();
				var text = $(item).text();
				if(value){
					dependorData.push({id: value, text:text});
				}
			});
			var list = selected.data('id').toString();
			if(list.includes(',')){
				list = list.split(',')
			}
			var filteredList = getDataById(dependorData, list);
			$(dependor).select2().empty();
			$(dependor).select2({data: filteredList});

			$(this).on('change', function(e){
				var currentSelected = $(this).find('option:selected');
				var depent = $(currentSelected).data('id').toString();
				if(depent.includes(',')){
					list = depent.split(',')
				}
				var filteredList = getDataById(dependorData, depent);
				$(dependor).select2().empty();
				$(dependor).select2({data: filteredList});
			})
		});
	}
})(jQuery);
