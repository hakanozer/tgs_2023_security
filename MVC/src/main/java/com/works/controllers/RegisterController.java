package com.works.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

@Controller
public class RegisterController {

    @GetMapping("/")
    public String register() {
        return "register";
    }

    @PostMapping("/saveRegister")
    public String saveRegister() {
        return "register";
    }

}
