package com.works.controllers;

import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

import javax.servlet.http.HttpServletRequest;

@Controller
@RequiredArgsConstructor
public class DashboardController {

    final HttpServletRequest req;

    @GetMapping("/dashboard")
    public String dashboard() {
        boolean status = req.getSession().getAttribute("customer") == null;
        if(status) {
            return "redirect:/";
        }
        return "dashboard";
    }

}
