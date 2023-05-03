package com.works.services;

import com.works.props.Customer;
import lombok.RequiredArgsConstructor;
import org.springframework.stereotype.Service;

import javax.servlet.http.HttpServletRequest;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;

@Service
@RequiredArgsConstructor
public class CustomerService {

    final DB db;
    final HttpServletRequest req;

    public boolean login(Customer cus) {
        boolean status = false;
        try {
            /*
            String sql = "select * from customer where email = '"+cus.getEmail()+"' and password = '"+cus.getPassword()+"'";
            System.out.println( sql );
            Statement st = db.dataSource().getConnection().createStatement();
            ResultSet rs = st.executeQuery(sql);
            status = rs.next();
            // ' or 1=1 --
             */
            String sql = "select * from customer where email = ? and password = ?";
            PreparedStatement pre = db.dataSource().getConnection().prepareStatement(sql);
            pre.setString(1, cus.getEmail());
            pre.setString(2, cus.getPassword());
            ResultSet rs = pre.executeQuery();
            status = rs.next();
            if (status) {
                cus.setName( rs.getString("name") );
                cus.setPassword(null);
                req.getSession().setAttribute("customer", cus);
            }

        }catch (Exception ex) {
            System.err.println("login Error : " + ex);
        }
        return status;
    }


    public void logout() {
        req.getSession().removeAttribute("customer");
    }

}
