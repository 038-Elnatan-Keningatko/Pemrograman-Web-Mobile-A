import React, { Component } from 'react';
import { 
  Container, 
  Header, 
  Content, 
  Left,
  Body,
  Icon,
  Text,
  ListItem,
  Thumbnail,
  Input,
  Item, 
} from 'native-base';

  let helperArray = require('./userList.json')
export default class ContentExample extends Component {
  constructor(props){
    super(props);
    this.state = {
      allUsers: helperArray,
      usersFiltered: helperArray,
    };
  }
  
searchUser(textToSearch){
  this.setState({
    usersFiltered: this.state.allUsers.filter(i =>
      i.name.toLowerCase().includes(textToSearch.toLowerCase()),
      ),
  });
}

searchUser(textToSearch){
  this.setState({
    usersFiltered: this.state.allUsers.filter(i =>
      i.name.includes(textToSearch),
      ),
  });
}

  render() {
    return (
      <Container>
        <Header searchBar rounded>
          <Item>
          <Icon name="search"/>
          <Input placeholder="Search User" 
          onChangeText={Text=> {
            this.searchUser(Text);
            }} />
          </Item>
          <Left>
          </Left>
          </Header>
        <Content>
          {this.state.usersFiltered.map((item, index) => (
            <ListItem avatar>
              <Body>
                <Text>{item.name}</Text>
                <Text note>{item.address}</Text>
              </Body>
            </ListItem>
          ))}
          </Content>
          </Container>
    );
  }
}