<?php

class __Mustache_a41d2bbb076e2acfacee0fcb8b01965b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="langmenu navigation">
';
        $buffer .= $indent . '    <ul id="nav-langmenu" class="nav more-nav navbar-nav">
';
        $buffer .= $indent . '        <li class="dropdown nav-item" role="none">
';
        $buffer .= $indent . '            <a class="dropdown-toggle nav-link"  role="menuitem" data-toggle="dropdown" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section10ca3eedf9bc5f23a86bca2cd8f38c36($context, $indent, $value);
        $buffer .= '" aria-haspopup="true" aria-expanded="false" href="#" aria-controls="drop-down-langmenu" tabindex="-1">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '                <b class="caret"></b>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <div class="dropdown-menu" role="menu" id="drop-down-langmenu" aria-labelledby="drop-down-langmenu">
';
        $value = $context->find('items');
        $buffer .= $this->section1d28b393186fc0fcfea1f7367f7004a4($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section10ca3eedf9bc5f23a86bca2cd8f38c36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'language';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'language';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFc0c0b051caebb6243b5c2bd6d728967(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-current="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-current="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9abeb3f18a4afe9b1cd6477123c4b499(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{key}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2af15ac904add763c915e6466da166cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{url}}}" class="dropdown-item" role="menuitem" {{#isactive}}aria-current="true"{{/isactive}}
                                {{#attributes}}{{key}}="{{value}}" {{/attributes}}>
                            {{text}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="dropdown-item" role="menuitem" ';
                $value = $context->find('isactive');
                $buffer .= $this->sectionFc0c0b051caebb6243b5c2bd6d728967($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                ';
                $value = $context->find('attributes');
                $buffer .= $this->section9abeb3f18a4afe9b1cd6477123c4b499($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d28b393186fc0fcfea1f7367f7004a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#link}}
                        <a href="{{{url}}}" class="dropdown-item" role="menuitem" {{#isactive}}aria-current="true"{{/isactive}}
                                {{#attributes}}{{key}}="{{value}}" {{/attributes}}>
                            {{text}}
                        </a>
                    {{/link}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('link');
                $buffer .= $this->section2af15ac904add763c915e6466da166cf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
