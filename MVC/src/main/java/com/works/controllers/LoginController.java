package com.works.controllers;

import com.works.props.Customer;
import com.works.services.CustomerService;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
@RequiredArgsConstructor
public class LoginController {

    final CustomerService customerService;

    @GetMapping("/login")
    public String login() {
        return "login";
    }

    @PostMapping("/customerLogin")
    public String customerLogin(Customer customer) {
        boolean status = customerService.login(customer);
        if (status) {
            return "redirect:/dashboard";
        }
        return "login";
    }

}
