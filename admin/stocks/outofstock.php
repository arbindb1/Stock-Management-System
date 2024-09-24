<script>
function validate_outOfStock(name,available) {
    var flag =0;
    var udata = sessionStorage.getItem('user_data');
    var parsedData = JSON.parse(udata);
    if(parsedData){

        for(var key in parsedData){

            if(parsedData.hasOwnProperty(key)){

                if(key == name){
                    console.log(parsedData[key]);
                    var sum = 0;
                    var count = 0;
                    var avg;
                    for(var value of parsedData[key]){
                        value = parseInt(value);
                        console.log("value"+value);
                        sum += value;
                        console.log("sum"+sum);
                        count++;
                        console.log("count"+count);
                    }
                    avg = sum/count;
                    console.log("avg"+avg);
                    console.log("available"+available);
                    if(available < avg){
                        flag = 1;
                        return flag;
                    }
                }

            }
        }

    }
    return flag;   
}
</script>