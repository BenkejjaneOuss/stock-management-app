export default {
	data:() => ({
		isLoading: false,
	}),
	computed: {
    },
    methods:{
		stateField(nameField, errorField) {
			let output = null;
	    	if(nameField == '' || nameField == null || this.errors.has(errorField)) {
	    		if(this.errors.first(errorField)) {
	    			output = false;
	    		}	    		
	    	}else{
	    		output = true;
	    	}
	    	return output;
		},
	}
}