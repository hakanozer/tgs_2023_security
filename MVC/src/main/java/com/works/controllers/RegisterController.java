package com.works.controllers;

import com.works.props.Customer;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.validation.BindingResult;
import org.springframework.validation.FieldError;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import javax.validation.Valid;
import java.util.List;

@Controller
public class RegisterController {

    @GetMapping("/")
    public String register() {
        return "register";
    }

    @PostMapping("/saveRegister")
    public String saveRegister(@Valid Customer customer, BindingResult result, Model model) {
        if ( result.hasErrors() ) {
            List<FieldError> errors = result.getFieldErrors();
            model.addAttribute("errors", errors);
        }else {
            System.out.println(customer);
            model.addAttribute("password", customer.getPassword());
        }

        return "register";
    }

}
