<?php

class __Mustache_b57f41e88757dfa4474564e3107dffe7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<a id="sticky-to-top" href="#page-top" uk-totop uk-scroll></a>
';
        $value = $context->find('socialsfootertop');
        $buffer .= $this->sectionF9cabc81c956764c7125b0b7611baca1($context, $indent, $value);
        $buffer .= $indent . '<footer id="page-footer" class="lambda-page-footer">
';
        $buffer .= $indent . '    
';
        if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/footer_blocks')) {
            $buffer .= $partial->renderInternal($context, $indent . '	');
        }
        $buffer .= $indent . '	
';
        $buffer .= $indent . '	<div class="footer-bottom">	
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '            <div id="course-footer" class="row">
';
        $buffer .= $indent . '                <div class="col-12">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('socialsfooter');
        $buffer .= $this->section7345eefc34147efadbf4caf8c039a4d9($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasfootnote');
        $buffer .= $this->section59684a98143240851b7381cc9948f4ea($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.page_doc_link');
        $buffer .= $this->sectionDfcb723300e5479cf0ec4c96c8550bf5($context, $indent, $value);
        $buffer .= $indent . '		
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <div class="tool_usertours-resettourcontainer"></div>
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>';

        return $buffer;
    }

    private function sectionF9cabc81c956764c7125b0b7611baca1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div id="footer-top">
    <div  class="container-fluid">
        {{>theme_lambda2/includes/socials}}
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div id="footer-top">
';
                $buffer .= $indent . '    <div  class="container-fluid">
';
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/socials')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7345eefc34147efadbf4caf8c039a4d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			            {{>theme_lambda2/includes/socials}}
		            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_lambda2/includes/socials')) {
                    $buffer .= $partial->renderInternal($context, $indent . '			            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59684a98143240851b7381cc9948f4ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			            {{{ footnote }}}
		            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '			            ';
                $value = $this->resolveValue($context->find('footnote'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDfcb723300e5479cf0ec4c96c8550bf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <p class="helplink">{{{ output.page_doc_link }}}</p>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <p class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
