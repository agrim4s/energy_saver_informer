$('#soc1').css('display','none');
                $('#soc2').css('display','none');
                $('#soc3').css('display','none');
                $('#soc4').css('display','none');
                $('#soc5').css('display','none');
                $('#soc6').css('display','none');
                $('#soc7').css('display','none');
                $('#soc8').css('display','none');
                $('#soc9').css('display','none');
                $('#soc10').css('display','none');
                function getValue(selectObject){
                    
                    var val = selectObject.value; 
                    if(val == 1){
                        $('#soc1').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 2){
                        $('#soc2').css('display','block');
                        $('#soc1').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 3){
                        $('#soc3').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 4){
                        $('#soc4').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 5){
                        $('#soc5').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 6){
                        $('#soc6').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 7){
                        $('#soc7').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 8){
                        $('#soc8').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 9){
                        $('#soc9').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc1').css('display','none');
                        $('#soc10').css('display','none');
                    }
                    else if(val == 10){
                        $('#soc10').css('display','block');
                        $('#soc2').css('display','none');
                        $('#soc3').css('display','none');
                        $('#soc4').css('display','none');
                        $('#soc5').css('display','none');
                        $('#soc6').css('display','none');
                        $('#soc7').css('display','none');
                        $('#soc8').css('display','none');
                        $('#soc9').css('display','none');
                        $('#soc1').css('display','none');
                    }
                    return;
                }