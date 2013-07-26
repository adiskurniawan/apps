        <div class="breadLine">
            
            <ul class="breadcrumb">
                <li><a href="#">Simple Admin</a> <span class="divider">></span></li>                
                <li class="active">Forms stuff</li>
            </ul>
                        
            <ul class="buttons">
                <li>
                    <!-- <a href="#" class="link_bcPopupList"><span class="icon-user"></span><span class="text">Users list</span></a> -->

                    <div id="bcPopupList" class="popup">
                        <div class="head">
                            <div class="arrow"></div>
                            <span class="isw-users"></span>
                            <span class="name">List users</span>
                            <div class="clear"></div>
                        </div>
                        <div class="body-fluid users">

                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/aqvatarius.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Aqvatarius</a>                                    
                                    <span>online</span>
                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/olga.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Olga</a>                                
                                    <span>online</span>
                                </div>
                                <div class="clear"></div>
                            </div>                        

                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/alexey.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Alexey</a>  
                                    <span>online</span>
                                </div>
                                <div class="clear"></div>
                            </div>                              
                        
                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/dmitry.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Dmitry</a>                                    
                                    <span>online</span>
                                </div>
                                <div class="clear"></div>
                            </div>                         

                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/helen.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Helen</a>                                                                        
                                </div>
                                <div class="clear"></div>
                            </div>                                  

                            <div class="item">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>assets/aquarius/img/users/alexander.jpg" width="32"/></a></div>
                                <div class="info">
                                    <a href="#" class="name">Alexander</a>                                                                        
                                </div>
                                <div class="clear"></div>
                            </div>                                  

                        </div>
                        <div class="footer">
                            <button class="btn" type="button">Add new</button>
                            <button class="btn btn-danger link_bcPopupList" type="button">Close</button>
                        </div>
                    </div>                    
                    
                </li>                
                <li>
                     <!-- <a href="#" class="link_bcPopupSearch"><span class="icon-search"></span><span class="text">Search</span></a> -->
                    
                    <div id="bcPopupSearch" class="popup">
                        <div class="head">
                            <div class="arrow"></div>
                            <span class="isw-zoom"></span>
                            <span class="name">Search</span>
                            <div class="clear"></div>
                        </div>
                        <div class="body search">
                            <input type="text" placeholder="Some text for search..." name="search"/>
                        </div>
                        <div class="footer">
                            <button class="btn" type="button">Search</button>
                            <button class="btn btn-danger link_bcPopupSearch" type="button">Close</button>
                        </div>
                    </div>                
                </li>
            </ul>
            
        </div>
        
        <div class="workplace">
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-documents"></div>
                        <h1>Text fields</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form">
                            <div class="span3">Input type text:</div>
                            <div class="span9"><input type="text" value="some text value..."/></div>
                            <div class="clear"></div>
                        </div> 

                        <div class="row-form">
                            <div class="span3">Input type password:</div>
                            <div class="span9"><input type="password" value="123123123"/></div>
                            <div class="clear"></div>
                        </div>                         

                        <div class="row-form">
                            <div class="span3">Readonly input:</div>
                            <div class="span9"><input type="text" value="readonly input field..." readonly="readonly"/></div>
                            <div class="clear"></div>
                        </div> 

                        <div class="row-form">
                            <div class="span3">Disabled input:</div>
                            <div class="span9"><input type="text" value="disabled input field..." disabled="disabled"/></div>
                            <div class="clear"></div>
                        </div>                                       
                        
                        <div class="row-form">
                            <div class="span3">Placeholder:</div>
                            <div class="span9"><input type="text" placeholder="placeholder..."/></div>
                            <div class="clear"></div>
                        </div>                                                               

                        <div class="row-form">
                            <div class="span3">Textarea field:</div>
                            <div class="span9"><textarea name="textarea">Some text in textarea field...</textarea></div>
                            <div class="clear"></div>
                        </div>                        

                        <div class="row-form">
                            <div class="span3">Textarea placeholder:</div>
                            <div class="span9"><textarea name="textarea" placeholder="Textarea field placeholder..."></textarea></div>
                            <div class="clear"></div>
                        </div>                                                
                        
                    </div>
                </div>
                
            </div>
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-favorite"></div>
                        <h1>WYSIWYG HTML Editor</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid" id="wysiwyg_container">
                        
                        <textarea id="wysiwyg" name="text" style="height: 300px;"></textarea>
                        
                    </div>
                </div>
                
            </div>            
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span6">
                    <div class="head">
                        <div class="isw-list"></div>
                        <h1>Select fields</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form">
                            <div class="span5">Simple select:</div>
                            <div class="span7">
                                <select name="select">
                                        <option value="0">choose a option...</option>
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>   
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                                            

                        <div class="row-form">
                            <div class="span5">Multiple select:</div>
                            <div class="span7">
                                <select name="select" multiple="multiple">                                    
                                        <option value="0">choose a option...</option>
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>                         
                        
                        <div class="row-form">
                            <div class="span5">Simple Select2:</div>
                            <div class="span7">
                                <select name="select" id="s2_1" style="width: 100%;">
                                    <option value="0">choose a option...</option>
                                    <optgroup label="Some group #1">
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                    </optgroup>
                                    <optgroup label="Some group #1">
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                    </optgroup>
                                    <optgroup label="Some group #3">
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                    </optgroup>                                 
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>           
                        
                        <div class="row-form">
                            <div class="span5">Multiple Select2:</div>
                            <div class="span7">                                
                                <select name="select" id="s2_2" style="width: 100%;" multiple="multiple">
                                    <option value="0">choose a option...</option>
                                    <optgroup label="Some group #1">
                                        <option value="1">Andorra</option>
                                        <option value="2">Antarctica</option>
                                        <option value="3">Bulgaria</option>
                                    </optgroup>
                                    <optgroup label="Some group #1">
                                        <option value="4">Germany</option>
                                        <option value="5">Dominican Republic</option>
                                        <option value="6">Micronesia</option>
                                        <option value="7">United Kingdom</option>
                                    </optgroup>
                                    <optgroup label="Some group #3">
                                        <option value="8">Greece</option>
                                        <option value="9">Italy</option>
                                        <option value="10">Ukraine</option>                                    
                                    </optgroup>                                  
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div> 
                        
                    </div>
                </div>

                <div class="span6">
                    <div class="head">
                        <div class="isw-target"></div>
                        <h1>Checkbox, radio and file fields</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        
                        
                        <div class="row-form">
                            <div class="span5">Checkbox:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox1"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox2" checked="checked"/> checked
                                </label>
                            </div>
                            <div class="clear"></div>
                        </div> 
                        <div class="row-form">
                            <div class="span5">Disabled checkbox:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox1" disabled="disabled"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" value="checkbox2" disabled="disabled" checked="checked"/> checked
                                </label>
                            </div>
                            <div class="clear"></div>
                        </div>                          
                        
                        <div class="row-form">
                            <div class="span5">Radio button:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="radio" name="radio1"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="radio" name="radio1" checked="checked"/> checked
                                </label>
                            </div>
                            <div class="clear"></div>
                        </div>                         
                        <div class="row-form">
                            <div class="span5">Disabled radio:</div>
                            <div class="span7">
                                <label class="checkbox inline">
                                    <input type="radio" name="radio2" disabled="disabled"/> unchecked
                                </label>
                                <label class="checkbox inline">
                                    <input type="radio" name="radio2" disabled="disabled" checked="checked"/> checked
                                </label>
                            </div>
                            <div class="clear"></div>
                        </div>                                 
                        
                        <div class="row-form">
                            <div class="span5">Input file:</div>
                            <div class="span7">                                                                
                                <input type="file" name="file"/>
                            </div>
                            <div class="clear"></div>
                        </div> 
                        
                    </div>
                </div>                
                
            </div>
            
            <div class="dr"><span></span></div>            
            
            <div class="row-fluid">
                
                <div class="span6">
                    <div class="head">
                        <div class="isw-cloud"></div>
                        <h1>Masked inputs</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        

                        <div class="row-form">
                            <div class="span3">Date:</div>
                            <div class="span9"><input type="text" id="mask_date"/> <span>Example: 04/10/2012</span></div>
                            <div class="clear"></div>
                        </div>                         
                        
                        <div class="row-form">
                            <div class="span3">Phone number:</div>
                            <div class="span9"><input type="text" id="mask_phone"/> <span>Example: 98 (765) 432-10-98</span></div>
                            <div class="clear"></div>
                        </div>                                   

                        <div class="row-form">
                            <div class="span3">Credit card number:</div>
                            <div class="span9"><input type="text" id="mask_credit"/> <span>Example: 9876-5432-1098-7654</span></div>
                            <div class="clear"></div>
                        </div>                                                           

                        <div class="row-form">
                            <div class="span3">TIN:</div>
                            <div class="span9"><input type="text" id="mask_tin"/> <span>Example: 98-7654321</span></div>
                            <div class="clear"></div>
                        </div>                         

                        <div class="row-form">
                            <div class="span3">SSN:</div>
                            <div class="span9"><input type="text" id="mask_ssn"/> <span>Example: 987-65-4321</span></div>
                            <div class="clear"></div>
                        </div>                                                 
                        
                    </div>
                </div>
                
                <div class="span6">
                    <div class="head">
                        <div class="isw-ok"></div>
                        <h1>Form validation</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        
                        <form id="validation" method="POST" action="submit.action">
                            
                        <div class="row-form">
                            <div class="span3">Date:</div>
                            <div class="span9"><input value="" class="validate[required,custom[date]]" type="text" name="date" id="date"/> <span>Example: 2010-12-01</span></div>
                            <div class="clear"></div>
                        </div>                         

                        <div class="row-form">
                            <div class="span3">E-mail:</div>
                            <div class="span9"><input value="" class="validate[required,custom[email]]" type="text" name="email" id="email" />  <span>Example: someone@nowhere.com</span></div>
                            <div class="clear"></div>
                        </div>                                                                                 

                        <div class="row-form">
                            <div class="span3">Required:</div>
                            <div class="span9">        
                                <select name="sport" id="sport" class="validate[required]" id="sport">
                                    <option value="">Choose a sport</option>
                                    <option value="option1">Tennis</option>
                                    <option value="option2">Football</option>
                                    <option value="option3">Golf</option>
                                </select>
                                <span>Required select field</span>
                            </div>
                            <div class="clear"></div>
                        </div>                                                                                 
                            
                        <div class="row-form">
                            <div class="span3">User name:</div>
                            <div class="span9">        
                                <input value="" class="validate[required,maxSize[5]]" type="text" name="user" id="user"/>
                                <span>Maximum 5 characters</span>
                            </div>
                            <div class="clear"></div>
                        </div>      
                            
                        <div class="row-form">
                            <div class="span3">Passowrd:</div>
                            <div class="span9">        
                                <input value="" class="validate[required,minSize[5]]" type="password" name="password" id="password"/>
                                <span>Minimum 5 characters</span>
                            </div>
                            <div class="clear"></div>
                        </div>                                  
                            
                        </form>
                    </div>
                                                    
                </div>
                                
            </div>
            
            <div class="dr"><span></span></div>
            
            <div class="row-fluid">
                
                <div class="span12">
                    <div class="head">
                        <div class="isw-grid"></div>
                        <h1>Fields grid</h1>
                        <div class="clear"></div>
                    </div>
                    <div class="block-fluid">                        

                        <div class="row-form">
                            <div class="span4"><input type="text" value="span4"/></div>
                            <div class="span4"><input type="text" value="span4"/></div>
                            <div class="span4"><input type="text" value="span4"/></div>                            
                            <div class="clear"></div>
                        </div>                                                               
                        
                        <div class="row-form">
                            <div class="span5"><input type="text" value="span5"/></div>
                            <div class="span5"><input type="text" value="span5"/></div>
                            <div class="span2"><input type="text" value="span2"/></div>                            
                            <div class="clear"></div>
                        </div>                                                                             

                        <div class="row-form">
                            <div class="span6"><input type="text" value="span6"/></div>
                            <div class="span6"><input type="text" value="span6"/></div>                            
                            <div class="clear"></div>
                        </div>                                                                                       
                        
                        <div class="row-form">
                            <div class="span9"><input type="text" value="span9"/></div>
                            <div class="span3"><input type="text" value="span3"/></div>                            
                            <div class="clear"></div>
                        </div>                                                                             

                        <div class="row-form">
                            <div class="span10"><input type="text" value="span10"/></div>                            
                            <div class="span2"><input type="text" value="span2"/></div>                            
                            <div class="clear"></div>
                        </div>                                                                                                     
                        
                        <div class="row-form">
                            <div class="span12"><input type="text" value="span12"/></div>                            
                            <div class="clear"></div>
                        </div>                                                                             
                        
                    </div>
                </div>
                
            </div>            
            
            <div class="dr"><span></span></div>
        
        </div>
        
    </div>   
